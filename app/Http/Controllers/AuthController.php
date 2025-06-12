<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AuthController extends Controller
{
    function register()
    {
        return view('auth.register');

    // pozriet este raz video a v3etko skontrolova5
        
    }
    function store()
    {
        $validated = request()->validate(
            [   
                'nickname' => 'required |min:3|max:20',
                'name' =>'required |min:3|max:20',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|confirmed|min:8'
            ]
            );
        
        $user = User::create(
            [
                'nickname' => $validated['nickname'],
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password'])

            ]
            );
        return redirect()->route('index')->with('success','Account created Successfuly');
    }
    function login()
    {
        return view('auth.login');
    }
    function passwordReset()
    {
        return view('auth.passwordReset');
    }
    function verification()
    {
        return view('auth.verification');
    }
}
