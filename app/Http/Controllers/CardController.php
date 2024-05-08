<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CardController extends Controller
{
    public function card_page($product_id)
    {
        $product =
            $client_id = Client::where('user_id', Auth::user()->id)->first();
        if ($client_id) {

            return view('client.card');
        } else {
            return redirect()->route('registration_page');
        }
    }
}
