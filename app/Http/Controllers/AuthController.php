<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

    public function index()
    {
        return view('sign-in');
    }

    public function signIn(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $creds =  $request->only(['email', 'password']);
        if (Auth::attempt($creds)) {
            return redirect()->intended(route('home'));
        }

        return redirect()->back()->withErrors(['wrong' => 'Your email or password are wrong']);
    }

    public function register()
    {
        return view('register');
    }

    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ], [
            'name.required' => 'the name is required',

            'email.required' => 'the email is required',
            'email.email' => 'Pleas chek your email',
            'email.unique' => 'this email is used',

            'password.required' => 'the password is required',
            'password.min' => 'Password min length is 6',
            'password.confirmed' => 'Password mismatch ',
        ]);

        User::Create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('sign-in');
    }


    public function signOut()
    {
        Session::flush();
        Auth::logout();
        return redirect(route('sign-in'));
    }
}
