<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    function register()
    {
        return view('auth.register');
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
