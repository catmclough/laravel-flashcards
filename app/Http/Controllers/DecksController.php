<?php

namespace App\Http\Controllers;

use App\Deck;
use Illuminate\Http\Request;

class DecksController extends Controller
{
    public function index() {
        $decks = Deck::all();
        return view('decks.index', ['decks' => $decks]);
    }

    public function show(Deck $deck) {
        return view('decks.show', ['deck' => $deck ]);
    }

    public function store(Request $request) {
        $deck = new Deck();
        $deck->title = $request->title;
        $deck->save();
        return redirect('/decks');
    }
}
