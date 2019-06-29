<?php

use Faker\Generator as Faker;

$factory->define(\kindergestion\Photo::class, function (Faker $faker) {
    return [
        'name' => $faker->firstName,
        'photo' => $faker->imageUrl($width = 640, $height = 480),
    ];
});
