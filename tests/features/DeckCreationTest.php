<?php

use App\Deck;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeckCreationTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_create_deck()
    {
        $this->call('POST', '/decks', ['title' => 'New Test Deck']);
        $this->assertRedirectedTo('/decks');
        $deckTitles = Deck::all()->pluck('title');
        assert($deckTitles->contains('New Test Deck'));
    }
}
