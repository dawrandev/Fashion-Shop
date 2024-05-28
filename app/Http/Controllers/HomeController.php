<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Option;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $category_products;
    public function __construct()
    {
        $this->category_products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->select('products.id as product_id', 'categories.id as category_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price')
            ->get();
    }
    public function home_page()
    {
        $category_products = $this->category_products;
        $categories = Category::all();
        $options = DB::table('options')
            ->leftJoin('products', 'options.product_id', '=', 'products.id')
            ->leftJoin('sizes', 'options.size_id', '=', 'sizes.id')
            ->leftJoin('colors', 'options.color_id', '=', 'colors.id')
            ->select('sizes.*', 'colors.*', 'products.id as product_id')
            ->get();
        $option = Option::where('product_id', 11)
            ->get();
        $i = 1;
        return view("client.home", compact("options", "i", "category_products", "categories"));
    }
}
