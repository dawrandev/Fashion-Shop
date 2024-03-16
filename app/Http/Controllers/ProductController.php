<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Price;
use App\Models\Product;
use DB;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $products;
    public function __construct()
    {
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.name as category_name', 'products.name as product_name', 'products.image', 'products.price')
            ->paginate(9);
    }
    public function products_page()
    {
        $products = $this->products;
        return view('products', compact('products'));
    }
    public function single_product(Request $request)
    {
        $product_id = $request->product_id;
        $single_product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $request->product_id)
            ->select('categories.name as category_name', 'products.name as product_name', 'products.image', 'products.text_1', 'text_2', 'image_1', 'image_2', 'products.price', 'pcs')
            ->get();
        return view('single_product', compact('single_product', 'product_id'));
    }
}
