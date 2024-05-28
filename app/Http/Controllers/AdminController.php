<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\History;
use App\Models\Option;
use App\Models\Product;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public $histories;
    public $clients;
    public function __construct()
    {
        $this->histories = DB::table('histories')
            ->join('clients', 'histories.user_id', '=', 'clients.user_id')
            ->join('categories', 'histories.category_id', '=', 'categories.id')
            ->join('products', 'histories.product_id', '=', 'products.id')
            ->join('sizes', 'histories.size_id', '=', 'sizes.id')
            ->join('colors', 'histories.color_id', '=', 'colors.id')
            ->select('clients.user_id as user_id', 'categories.name as category_name', 'products.name as product_name', 'products.*', 'clients.*', 'histories.*', 'sizes.*', 'colors.*');
        $this->clients = DB::table('users')
            ->join('clients', 'users.id', '=', 'clients.user_id')
            ->select('clients.*')
            ->get();
    }
    public function clients_table()
    {
        $clients = $this->clients;
        $summa = $this->CalculateSumma();
        $i = 1;
        return view('admin.clients_table', compact('i', 'summa', 'clients'));
    }
    public function CalculateSumma()
    {
        $summa = 0;
        foreach ($this->histories->get() as $history) {
            $summa += $history->summa;
        }
        return $summa;
    }
    public function client_products($user_id)
    {
        $client_products = $this->histories->where('clients.user_id', $user_id)->paginate(10);
        foreach ($client_products as $product) {
            $surname = $product->surname;
            $name = $product->name;
        }
        $i = 1;
        return view('admin.client_products', compact('client_products', 'i', 'surname', 'name'));
    }
    public function create_product_page()
    {
        $categories = Category::all();
        $sizes = Size::all();
        $colors = Color::all();
        return view('admin.create_product', compact('categories', 'sizes', 'colors'));
    }
    public function create_product(Request $request)
    {
        $validate = $request->validate([
            'product_name' => 'required',
            'price' => 'required',
            'sizes' => 'required|array',
            'colors' => 'required|array',
            'text_1' => 'required',
            'text_2' => 'required',
            'image' => 'image|required',
            'image_1' => 'image|required',
            'image_2' => 'image|required'
        ]);
        if ($request->hasFile('image') && $request->hasFile('image_1') && $request->hasFile('image_2')) {
            $imagename = $request->file('image')->getClientOriginalName();
            $imagename_1 = $request->file('image_1')->getClientOriginalName();
            $imagename_2 = $request->file('image_2')->getClientOriginalName();

            $path = $request->file('image')->storeAs('public/images/', $imagename);
            $path_1 = $request->file('image_1')->storeAs('public/images/', $imagename_1);
            $path_2 = $request->file('image_2')->storeAs('public/images/', $imagename_2);
        } else {
            return response()->json(['error' => 'Images not found in request'], 400);
        }

        $storeproduct = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->product_name,
            'price' => $request->price,
            'image' => $imagename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image_1' => $imagename_1,
            'image_2' => $imagename_2
        ]);
        $colors = $request->colors;
        for ($i = 0; $i < count($request->sizes); $i++) {
            $color = isset($colors[$i]) ? $colors[$i] : null;
            $option_create = Option::create([
                'product_id' => $storeproduct->id,
                'size_id' => $request->sizes[$i],
                'color_id' => $color
            ]);
        }
        return redirect()->route('create_pieces_page');
    }

}
