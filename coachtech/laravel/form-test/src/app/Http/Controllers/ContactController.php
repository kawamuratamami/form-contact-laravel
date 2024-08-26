<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function login(Request $request)
    {
        $register = $request->only(['email', 'password']);
        return view('login', ['register' => $register]);
    }
}
