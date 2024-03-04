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
            ->join('prices', 'baskets.price_id', '=', 'prices.id')
            ->select('categories.name as category_name', 'products.name as product_name', 'price', 'products.image', 'baskets.id')
            ->get();
        $this->summa = $this->CalculateSumma();
    }
    public function basket(Request $request)
    {
        $product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('prices', 'products.id', '=', 'prices.product_id')
            ->where('products.id', '=', $request->product_id)
            ->select('categories.id as category_id', 'products.id as product_id', 'products.image', 'prices.id as price_id')
            ->first();
        $basket_product = Basket::create([
            'category_id' => $product->category_id,
            'product_id' => $product->product_id,
            'price_id' => $product->price_id,
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
