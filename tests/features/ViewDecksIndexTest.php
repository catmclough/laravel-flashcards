<?php

use App\Deck;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewDecksIndexTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_decks_index_page_when_no_decks_exist()
    {
        $this->visit('/decks')
             ->assertResponseOk();
    }

    public function test_can_view_single_deck_on_index_page()
    {
        $deck = factory(Deck::class)->create(['title' => 'State Capitals']);

        $this->visit('/decks')
             ->see($deck->title);
    }
}
