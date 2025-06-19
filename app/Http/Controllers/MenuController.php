<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;

class MenuController extends Controller
{
    public function index()
    {
        // retrieve the last drop from session, if any
        $drop = session('drop');
        return view('menu.main', compact('drop'));
    }
    public function inventory()
    {
        $user = Auth::user();
        $items = $user->items()->get();
        return view('menu.inventory', compact('items'));
    }

    protected function openLootboxByRarity(string $rarity)
    {
        $user = Auth::user();

        // pull a random item of that rarity
        $item = Item::where('rarity', $rarity)
                    ->inRandomOrder()
                    ->first();

        // attach it (or increment quantity if you add that column)
        $user->items()->syncWithoutDetaching([$item->id]);

        // flash it into the session so the view can show it
        session()->flash('drop', $item);

        return back();
    }

    public function openCommon(Request $request)
    {
        $user = Auth::user();
        $item = Item::where('rarity', 'common')->inRandomOrder()->first();

        if ($item) {
            // Check if the user already owns the item
            $existing = $user->items()->where('item_id', $item->id)->first();

            if ($existing) {
                // Increment quantity
                $user->items()->updateExistingPivot($item->id, [
                    'quantity' => $existing->pivot->quantity + 1
                ]);
            } else {
                // Add new item with quantity 1
                $user->items()->attach($item->id, ['quantity' => 1]);
            }
        }

        return back()->with('drop', $item);
    }
    
    public function openRare(Request $request)
    {
        $user = Auth::user();
        $item = Item::where('rarity', 'rare')->inRandomOrder()->first();
    
        if ($item) {
            // Check if the user already owns the item
            $existing = $user->items()->where('item_id', $item->id)->first();
    
            if ($existing) {
                // Increment quantity
                $user->items()->updateExistingPivot($item->id, [
                    'quantity' => $existing->pivot->quantity + 1
                ]);
            } else {
                // Add new item with quantity 1
                $user->items()->attach($item->id, ['quantity' => 1]);
            }
        }
    
        return back()->with('drop', $item);
    }
    
    public function openEpic(Request $request)
    {
        $user = Auth::user();
        $item = Item::where('rarity', 'epic')->inRandomOrder()->first();
    
        if ($item) {
            // Check if the user already owns the item
            $existing = $user->items()->where('item_id', $item->id)->first();
    
            if ($existing) {
                // Increment quantity
                $user->items()->updateExistingPivot($item->id, [
                    'quantity' => $existing->pivot->quantity + 1
                ]);
            } else {
                // Add new item with quantity 1
                $user->items()->attach($item->id, ['quantity' => 1]);
            }
        }
    
        return back()->with('drop', $item);
    }
}
