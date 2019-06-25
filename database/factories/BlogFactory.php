<?php

use Faker\Generator as Faker;

$factory->define(kindergestion\Blog::class, function (Faker $faker) {
    $title = $faker->unique()->word(5);
    return [
        'title' => $title,
        'body' => $faker->paragraph($nbSentences = 10, $variableNbSentences = true),
        'photo' => $faker->imageUrl($width = 640, $height = 480),
        'status' => $faker->randomElement($array = array('ACTIVE', 'DESACTIVE')),
        'slug' => $title,
    ];
});
