<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Option;
use App\Models\Piece;
use App\Models\Price;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public $products;
    public $options;
    public $categories;
    public function __construct()
    {
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price')
            ->paginate(9);
        $this->options = DB::table('options')
            ->join('products', 'options.product_id', '=', 'products.id')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->join('colors', 'options.color_id', '=', 'colors.id')
            ->select('sizes.*', 'colors.*', 'products.id as product_id')
            ->get();
        $this->categories = Category::all();
    }
    public function products_page()
    {
        $categories = $this->categories;
        $i = 1;
        $options = $this->options;
        $products = $this->products;
        return view('client.products', compact('products', 'options', 'i', 'categories'));
    }
    public function get_product_data($product_id)
    {
        $categories = $this->categories;
        $single_product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $product_id)
            ->select('categories.name as category_name', 'products.*')
            ->first();
        $summa = 0;
        $pieces = Piece::where('product_id', $product_id)
            ->get();
        foreach ($pieces as $piece) {
            $summa += $piece->pcs;
            $pcs = $summa;
            return compact('single_product', 'product_id', 'pcs', 'categories');
        }
    }
    public function single_product($product_id)
    {
        $data = $this->get_product_data($product_id);
        return view('client.single_product', $data);
    }
    public function admin_products_page()
    {
        $categories = Category::all();
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('categories.id as category_id', 'products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'products.price')
            ->orderBy('products.created_at', 'desc')
            ->paginate(9);
        return view('admin.products', compact('products', 'categories'));
    }
    public function single_product_admin($product_id)
    {
        $data = $this->get_product_data($product_id);
        return view('admin.single_product', $data);
    }
}
