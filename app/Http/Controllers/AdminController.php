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
use Illuminate\Support\Facades\Log;

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
        $request->validate([
            'product_name' => 'required',
            'price' => 'required|numeric',
            'sizes' => 'required|array',
            'colors' => 'required|array',
            'text_1' => 'required',
            'text_2' => 'required',
            'image' => 'required|image',
            'image_1' => 'required|image',
            'image_2' => 'required|image',
            'category_id' => 'required|exists:categories,id',
        ]);

        $imagename = $request->file('image')->getClientOriginalName();
        $imagename_1 = $request->file('image_1')->getClientOriginalName();
        $imagename_2 = $request->file('image_2')->getClientOriginalName();

        $request->file('image')->storeAs('public/images/', $imagename);
        $request->file('image_1')->storeAs('public/images/', $imagename_1);
        $request->file('image_2')->storeAs('public/images/', $imagename_2);

        $product = Product::create([
            'category_id' => $request->category_id,
            'name' => $request->product_name,
            'price' => $request->price,
            'image' => $imagename,
            'text_1' => $request->text_1,
            'text_2' => $request->text_2,
            'image_1' => $imagename_1,
            'image_2' => $imagename_2
        ]);

        $sizes = $request->sizes;
        $colors = $request->colors;

        foreach ($sizes as $index => $sizeId) {
            Option::create([
                'product_id' => $product->id,
                'size_id' => $sizeId,
                'color_id' => $colors[$index] ?? null
            ]);
        }

        $product = Product::with(['category', 'colors', 'sizes'])->find($product->id);

        $caption = "<b>✨ Jańa ónim qosıldı!</b>\n\n";
        $caption .= "📦 <b>Kategoriya:</b> " . ($product->category->name ?? "Noma'lum") . "\n";
        $caption .= "🏷 <b>Atı:</b> {$product->name}\n";
        $caption .= "💵 <b>Baxası:</b> {$product->price} so'm\n\n";

        $caption .= "<b>Tolıq maǵlıwmat: <a href='http://127.0.0.1:8000/single_product/{$product->id}'>link</a></b>";


        $mainImagePath = storage_path('app/public/images/' . $product->image);
        sendTelegramMessage($caption, $mainImagePath);

        return redirect()->route('create_pieces_page')->with('success', 'Mahsulot muvaffaqiyatli qo‘shildi va Telegramga yuborildi!');
    }


    public function delete_product($id)
    {
        Product::where('id', $id)->delete();
        return redirect()->route('admin_products_page');
    }
}
