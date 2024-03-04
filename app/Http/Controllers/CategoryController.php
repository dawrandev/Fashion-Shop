<?php

namespace App\Http\Controllers;

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
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('categories.name', '=', $request->category_name)
            ->select('categories.name as category_name', 'products.name as product_name', 'products.image', 'prices.price')
            ->paginate(9);
    }
    public function category_product(Request $request)
    {
        $products = $this->products;
        return view('category_products', compact('products'));
    }
}
