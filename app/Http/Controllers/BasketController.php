<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use DB;
use Illuminate\Http\Request;

class BasketController extends Controller
{
    public $summa;
    public $basket_products;
    public function __construct()
    {
        $this->basket_products = DB::table('baskets')
            ->join('categories', 'baskets.category_id', '=', 'categories.id')
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->select('categories.name as category_name', 'products.name as product_name', 'products.image', 'baskets.id', 'products.price')
            ->get();
        $this->summa = $this->CalculateSumma();
    }
    public function basket(Request $request)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $request->product_id)
            ->select('categories.id as category_id', 'products.id as product_id', 'products.image')
            ->first();
        $basket_product = Basket::create([
            'category_id' => $product->category_id,
            'product_id' => $product->product_id,
            'image' => $product->image
        ]);
        return back()->with('success');
    }
    public function CalculateSumma()
    {
        $products = $this->basket_products;
        $summa = 0;
        foreach ($products as $product) {
            $summa += $product->price;
        }
        return $summa;
    }
    public function basket_page()
    {
        $summa = $this->summa;
        $basket_products = $this->basket_products;
        $i = 1;
        return view('basket', compact('basket_products', 'i', 'summa'));
    }
    public function delete_basket(Request $request)
    {
        $delete = Basket::destroy($request->id);
        return back();
    }
}
