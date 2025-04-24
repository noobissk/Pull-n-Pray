<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $character = new character([
            'name'=> 'Kaede Sumeragi',
            'description'=>'lesbian',
            'rarity'=> 2,
        ]);
        $character->save();
        return view('menu.layout',[
            'characters'=> character::all()
        ]);
    }
}
