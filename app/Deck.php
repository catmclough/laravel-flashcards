<?php

namespace App;

use App\Card;
use Illuminate\Database\Eloquent\Model;

class Deck extends Model
{
    protected $fillable = ['title'];

    public function cards() {
        return $this->hasMany(Card::class);
    }
}
