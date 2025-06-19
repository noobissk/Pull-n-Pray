<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'rarity'];

    public function users()
    {
        return $this->belongsToMany(User::class)
                    ->withTimestamps();
    }

}