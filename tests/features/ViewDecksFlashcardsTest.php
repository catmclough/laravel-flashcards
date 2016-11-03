<?php

use App\Deck;
use App\Card;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ViewDecksFlashcardsTest extends TestCase
{
    use DatabaseMigrations;

    public function test_can_view_deck_when_deck_has_no_flashcards()
    {
        $deck = factory(Deck::class)->create(['title' => 'State Capitals']);

        $this->visit('decks/' . $deck->id)
             ->assertResponseOk()
             ->see($deck->title);
    }

    public function test_can_view_decks_single_flashcard()
    {
        $deck = factory(Deck::class)->create(['title' => 'State Capitals']);
        $card = factory(Card::class)->make(['prompt' => 'Wyoming',
                                            'answer' => 'Cheyenne']);

        $deck->cards()->save($card);
        $this->visit('/decks/' . $deck->id)
             ->see($card->prompt);
    }

    public function test_can_view_decks_multiple_flashcard()
    {
        $deck = factory(Deck::class)->create(['title' => 'State Capitals']);
        $card1 = factory(Card::class)->make(['prompt' => 'Wyoming',
                                            'answer' => 'Cheyenne']);
        $card2 = factory(Card::class)->make(['prompt' => 'Illinois',
                                            'answer' => 'Springfield']);
        $card3 = factory(Card::class)->make(['prompt' => 'Georgia',
                                            'answer' => 'Atlanta']);
        $deck->cards()->saveMany([$card1, $card2, $card3]);
        $this->visit('/decks/' . $deck->id)
             ->see($card1->prompt)
             ->see($card2->prompt)
             ->see($card3->prompt);
    }
}
