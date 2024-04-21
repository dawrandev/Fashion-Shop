<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Piece;
use Illuminate\Http\Request;
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
            ->select('baskets.id', 'categories.name as category_name', 'products.name as product_name', 'sizes.size', 'colors.color', 'products.image', 'products.price', 'baskets.pcs')
            ->get();
        $this->summa = $this->CalculateSumma();
    }
    public function basket(Request $request)
    {
        $product_table = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'products.id')
            ->where('products.id', $request->product_id)
            ->select('categories.id as category_id', 'products.id as product_id', 'products.image')
            ->first();
        $option_table = DB::table('options')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->join('colors', 'options.color_id', '=', 'colors.id')
            ->where('product_id', $request->product_id)
            ->select('sizes.id as size_id', 'colors.id as color_id')
            ->first();
            if($request->pcs  > 0){
        $basket_product = Basket::create([
            'category_id' => $product_table->category_id,
            'product_id' => $product_table->product_id,
            'size_id' => $option_table->size_id,
            'color_id'=>$option_table->color_id,
            'image' => $product_table->image,
            'pcs' => $request->count
        ]);
        // $pcs = $request->count - Piece::where('product_id', $request->product_id)
        //     ->first()->pcs;
        // $pcs_update = DB::table('pieces')
        //     ->where('product_id', $request->product_id)
        //     ->update([
        //         'pcs' => $pcs
        //     ]);
        return $this->basket_page();
        }else{
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
        return view('basket', compact('basket_products', 'i', 'summa'));
    }
    public function delete_basket(Request $request)
    {
        $delete = Basket::destroy($request->id);
        return back();
    }
}
