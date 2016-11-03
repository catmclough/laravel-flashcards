<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
$factory->define(App\Deck::class, function (Faker\Generator $faker) {
    return [
        'title' => $faker->sentence(3)
    ];
});

$factory->define(App\Card::class, function (Faker\Generator $faker) {
    return [
        'prompt' => $faker->word,
        'answer' => $faker->word
    ];
});
