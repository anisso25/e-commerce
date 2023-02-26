<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }

    public function authenticate(Request $request)
    {
        $request -> validate([
            'email' => 'email',
            'password' => 'required'
        ]);

        if(auth()->attempt($request->only('email', 'password'))){
            return redirect()->Route('dashboard');
        }
        return redirect()->back()->withErrors('Les identifiant ne correspondent pas');
    }

    public function logout()
    {
        auth()->logout();

        return redirect()->route('login');
    }
}
