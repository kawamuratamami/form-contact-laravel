<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;

class RegisterController extends Controller
{
    public function register(RegisterRequest $request)
    {
        return view('register');
    }

    public function login(RegisterRequest $request)
    {
        return view('login', ['register' => $register]);
    }
}
