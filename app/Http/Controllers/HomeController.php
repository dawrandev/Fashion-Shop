<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;

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
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('categories.name', '=', 'shoe')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'products.image', 'prices.price')
            ->get();
        $shirts = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('categories.name', '=', 'shirt')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'products.image', 'prices.price')
            ->get();
        $pants = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('categories.name', '=', 'pant')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'products.image', 'prices.price')
            ->get();
        $jackets = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('categories.name', '=', 'jacket')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'products.image', 'prices.price')
            ->get();
        return view("home", compact("shoes", "shirts", "pants", "jackets"));
    }
}
