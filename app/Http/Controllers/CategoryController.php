<?php

namespace App\Http\Controllers;

use App\Models\Category;
use DB;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public $products;
    public $category;
    public function __construct(request $request)
    {
        $this->category = $request->category_name;
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', $request->category_name)
            ->select('categories.name as category_name', 'products.name as product_name', 'products.image', 'products.price')
            ->paginate(9);
    }
    public function category_product(Request $request)
    {
        $products = $this->products;
        return view('client.category_products', compact('products'));
    }

    public function create_category(Request $request)
    {
        $validate = $request->validate([
            'name' => 'required|unique:categories'
        ]);
        $category = Category::create([
            'name' => $request->name
        ]);
        return redirect()->route('create_option_page');
    }
    public function edit_category(Request $request)
    {
        $category = Category::where('id', $request->category_id)
            ->update([
                'name' => $request->new_category
            ]);
        return redirect()->route('create_option_page');
    }
    public function delete_category($category_id)
    {
        $delete_category = Category::where('id', $category_id)
            ->delete();
        return back();
    }
}

