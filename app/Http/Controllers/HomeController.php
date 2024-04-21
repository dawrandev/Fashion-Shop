<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public $shoes;
    public function __construct()
    {
    }
    public function home_page()
    {
        $shoes = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', 'shoe')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price')
            ->get();
        $shirts = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', 'shirt')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price', )
            ->get();
        $pants = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', 'pant')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price', )
            ->get();
        $jackets = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('categories.name', '=', 'jacket')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'image', 'price', )
            ->get();
        $options = DB::table('options')
            ->join('products', 'options.product_id', '=', 'products.id')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->join('colors', 'options.color_id', '=', 'colors.id')
            ->select('sizes.*','colors.*', 'products.id as product_id')
            ->get();
            $i = 1;
        return view("client.home", compact("shoes", "shirts", "pants", "jackets", "options", "i"));
    }
}
