<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login_page()
    {
        return view('admin.login');
    }
    public function register_page()
    {
        return view('admin.register');
    }
    public function register(Request $request) {}
}
