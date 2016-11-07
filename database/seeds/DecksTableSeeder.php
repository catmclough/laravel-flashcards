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
                    '18th Century Composers',
                    'Birds of Canada',
                    'World Leaders',
        ];

        foreach($titles as $title) {
            $deck = new App\Deck(['title' => $title]);
            $deck->save();
        }
    }
}
