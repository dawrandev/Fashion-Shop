<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('auth.login');
    }
    public function register_page()
    {
        return view('admin.register');
    }
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $admin = Admin::first();
        if ($admin->password == $request->password) {
            return redirect()->route('clients_table');
        }
        return back();
    }
}
