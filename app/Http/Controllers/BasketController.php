<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BasketController extends Controller
{
    public $summa;
    public $basket_products;
    public function __construct()
    {
        $this->basket_products = DB::table('baskets')
            ->join('categories', 'baskets.category_id', '=', 'categories.id')
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->join('sizes', 'baskets.size_id', '=', 'sizes.id')
            ->join('colors', 'baskets.color_id', '=', 'colors.id')
            ->select('baskets.id', 'products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'sizes.size', 'colors.color', 'products.image', 'products.price', 'baskets.pcs', 'size_id', 'color_id')
            ->get();
        $this->summa = $this->CalculateSumma();
    }
    public function basket($product_id, $count, $size_id, $color_id, $pcs)
    {
        $product_table = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id', $product_id)
            ->select('categories.id as category_id', 'products.id as product_id', 'products.image')
            ->first();
        if ($pcs > 0) {
            $basket_product = Basket::create([
                'user_id' => Auth::user()->id,
                'category_id' => $product_table->category_id,
                'product_id' => $product_table->product_id,
                'size_id' => $size_id,
                'color_id' => $color_id,
                'image' => $product_table->image,
                'pcs' => $count
            ]);
            return redirect()->route('basket_page');
        } else {
            return back();
        }
    }
    public function CalculateSumma()
    {
        $products = $this->basket_products;
        $summa = 0;
        foreach ($products as $product) {
            $summa += $product->price * $product->pcs;
        }
        return $summa;
    }
    public function basket_page()
    {
        $summa = $this->summa;
        $basket_products = $this->basket_products;
        $i = 1;
        return view('client.basket', compact('basket_products', 'i', 'summa'));
    }
    public function delete_basket(Request $request)
    {
        $delete = Basket::destroy($request->id);
        return back();
    }
}
