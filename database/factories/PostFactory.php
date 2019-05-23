<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(\App\Post::class, function (Faker $faker) {

    $title = $faker->sentence($nbWords = 6, $variableNbWords = true);

    return [
        'title' => $title,
        'slug'  => Str::slug($title),
        'data'  => $faker->paragraph($nbSentences = 8, $variableNbSentences = true)
    ];

});
