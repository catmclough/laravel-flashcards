<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RootPageTest extends TestCase
{
    use DatabaseMigrations;

    public function test_root_redirects_to_decks_index()
    {
        $this->visit('/')
             ->seePageIs('/decks');
    }

}
