<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewDecksFlashcardsTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_deck_when_deck_has_no_flashcards()
    {
        $this->post('/decks', ['title' => 'New Deck'])
             ->assertResponseOk();
    }
}
