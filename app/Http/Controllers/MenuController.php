<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Character;

class MenuController extends Controller
{
    public function index()
    {

        return view('menu.main',[
            'characters'=> Character::all()
        ]);
    }
}
