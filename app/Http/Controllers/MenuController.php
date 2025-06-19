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
    //lootbox chance

        public function openCommon()
    {
        $drop = Character::where('rarity', 'common')->inRandomOrder()->first();
        return back()->with('drop', $drop);
    }

    public function openRare()
    {
        $drop = Character::where('rarity', 'rare')->inRandomOrder()->first();
        return back()->with('drop', $drop);
    }

    public function openEpic()
    {
        $drop = Character::where('rarity', 'epic')->inRandomOrder()->first();
        return back()->with('drop', $drop);
    }

}
