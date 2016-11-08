<?php

use Illuminate\Database\Seeder;

class DecksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $titles = [
                    'U.S. State Capitals',
                    'German Nouns',
                    'The Periodic Table',
                    'Birds of Canada'
        ];



        foreach($titles as $title) {
            $deck = new App\Deck(['title' => $title]);
            $deck->save();
            $deck->cards()->save(factory(App\Card::class)->make());
            $deck->cards()->save(factory(App\Card::class)->make());
            $deck->cards()->save(factory(App\Card::class)->make());
            $deck->cards()->save(factory(App\Card::class)->make());
            $deck->cards()->save(factory(App\Card::class)->make());
            $deck->cards()->save(factory(App\Card::class)->make());
        }
    }
}
