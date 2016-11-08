<?php

use App\Deck;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class DeckCreationTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_deck_when_deck_has_no_flashcards()
    {
        $this->post('/decks', ['title' => 'New Test Deck'])
             ->seePageIs('/decks');

        assert(Deck::all()->contains('New Test Deck'));
    }
}
