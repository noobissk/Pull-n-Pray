<?php


namespace App\Http\Controllers;
class MenuController extends Controller
{
    public function index()
    {
        // $loot = session('loot'); // optional loot result from last roll

        // return view('menu.main', [
        //     // 'characters' => Character::all(),
        //     'loot' => $loot
        // ]);
        return view('menu.index');
    }

    public function openLootbox($rarity)
    {
        // // Get random item of specified rarity
        // $item = Item::where('rarity', $rarity)->inRandomOrder()->first();

        // // Save to session for display
        // session()->flash('loot', $item ? "You got: {$item->name} ({$item->rarity})" : "No item found!");

        return redirect()->route('menu.index'); // redirect to menu.index
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
