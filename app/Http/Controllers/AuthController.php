<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function index()
    {
        return view('sign-in');
    }

    public function signIn(Request $request)
    {
        dd($request->all());
    }

    public function register()
    {
        return view('register');
    }

    public function storeRegister(Request $request)
    {
        dd($request->all());
    }
}
