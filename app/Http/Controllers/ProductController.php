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
    public function __construct()
    {
        $this->products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('pieces', 'products.id', '=', 'pieces.product_id')
            ->select('categories.name as category_name', 'products.name as product_name', 'image', 'price', 'products.id as product_id', 'pieces.pcs')
            ->paginate(9);
        $this->options = DB::table('options')
            ->join('products', 'options.product_id', '=', 'products.id')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->join('colors', 'options.color_id', '=', 'colors.id')
            ->select('sizes.*', 'colors.*', 'products.id as product_id')
            ->get();
    }
    public function products_page()
    {
        $i = 1;
        $options = $this->options;
        $products = $this->products;
        return view('client.products', compact('products', 'options', 'i'));
    }
    public function single_product(Request $request)
    {
        $product_id = $request->product_id;
        $single_product = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->where('products.id', '=', $request->product_id)
            ->select('categories.name as category_name', 'products.*')
            ->get();
        $options = DB::table('options')
            ->join('sizes', 'options.size_id', '=', 'sizes.id')
            ->join('colors', 'options.color_id', '=', 'colors.id')
            ->where('options.product_id', $request->product_id)
            ->select('options.*', 'colors.*', 'sizes.*')
            ->get();
        $summa = 0;
        $pieces = Piece::where('product_id', $product_id)
            ->get();
        foreach ($pieces as $piece) {
            $summa += $piece->pcs;
            $pcs = $summa;
        }
        return view('client.single_product', compact('single_product', 'product_id', 'options', 'pcs'));
    }

    public function create_product_page()
    {
        return view('admin.create_product');
    }
}
