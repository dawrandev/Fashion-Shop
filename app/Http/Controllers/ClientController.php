<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{

    public function registration_page()
    {
        return view('client.register');
    }
    public function registration(Request $request)
    {
        $client_id = Client::where('user_id', Auth::user()->id)->first();
        if ($client_id) {
            return back();
        }
        $client = $request->validate([
            'user_id' => 'unique:clients',
            'surname' => 'required|min:5',
            'name' => 'required|min:3',
            'phone' => 'required|min:9|max:10|unique:clients',
            'address' => 'required'
        ]);
        $user = Client::create([
            'user_id' => Auth::user()->id,
            'surname' => $request->surname,
            'name' => $request->name,
            'phone' => $request->phone,
            'address' => $request->address
        ]);
        $user = User::where('ip_address', Auth::user()->ip_address)->first();
        Auth::login($user);
        return redirect()->route('card_page');
    }
    public function profile()
    {
        $client_documents = Client::where('user_id', Auth::user()->id)->get();
        return view('client.profile', compact('client_documents'));
    }
    public function update_client(Request $request)
    {
        $clients = $request->validate([
            'surname' => 'required',
            'name' => 'required',
            'phone' => 'required|min:8|max:10',
            'address' => 'required'
        ]);
        $update = Client::where('user_id', Auth::user()->id)
            ->update([
                'surname' => $request->surname,
                'name' => $request->name,
                'phone' => $request->phone,
                'address' => $request->address
            ]);
        return redirect()->route('profile');
    }
    public function my_purchases_page()
    {
        return view('client.my_purchases');
    }
}
