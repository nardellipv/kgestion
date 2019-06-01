<?php

use Faker\Generator as Faker;
use kindergestion\NewsLetter;

$factory->define(NewsLetter::class, function (Faker $faker) {
    return [
        'email' => $faker->email,
    ];
});
