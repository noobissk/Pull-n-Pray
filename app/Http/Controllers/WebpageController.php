<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebpageController extends Controller
{
    public function index()
    {
        return view('web.account.inc.login');
    }
}
