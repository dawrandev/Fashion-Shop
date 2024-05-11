<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Client;
use App\Models\History;
use App\Models\Piece;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function card_page($summa)
    {
        $client_id = Client::where('user_id', Auth::user()->id)->first();
        if ($client_id) {
            $basket_products = Basket::all();

            foreach ($basket_products as $product) {
                $piece = Piece::where('product_id', $product->product_id)
                    ->where('size_id', $product->size_id)
                    ->where('color_id', $product->color_id)
                    ->first();

                $new_pcs = $piece->pcs - $product->pcs;

                $update_pcs = Piece::where('product_id', $product->product_id)
                    ->where('size_id', $product->size_id)
                    ->where('color_id', $product->color_id)
                    ->update([
                        'pcs' => $new_pcs
                    ]);

                $placing_histories_table = History::create([
                    'user_id' => $product->user_id,
                    'category_id' => $product->category_id,
                    'product_id' => $product->product_id,
                    'size_id' => $product->size_id,
                    'color_id' => $product->color_id,
                    'image' => $product->image,
                    'pcs' => $product->pcs,
                    'summa' => $summa,
                    'date' => date('d-m-Y')
                ]);

                Basket::truncate();
            }
            return view('client.card');
        } else {
            return redirect()->route('registration_page');
        }
    }
}
