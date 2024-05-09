<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HistoryController extends Controller
{
    public function histories()
    {
        $histories = Db::table('histories')
            ->join('categories', 'histories.category_id', '=', 'categories.id')
            ->join('products', 'histories.product_id', '=', 'products.id')
            ->join('sizes', 'histories.size_id', '=', 'sizes.id')
            ->join('colors', 'histories.color_id', '=', 'colors.id')
            ->select('products.id as product_id', 'categories.name as category_name', 'products.name as product_name', 'sizes.size', 'colors.color', 'products.image', 'products.price', 'histories.pcs')
            ->get();
        $i = 1;
        return view('client.histories', compact('histories', 'i'));
    }
}
