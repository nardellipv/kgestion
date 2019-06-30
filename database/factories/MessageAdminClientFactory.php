<?php

use Faker\Generator as Faker;

$factory->define(kindergestion\MessageAdminClient::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence($nbWords = 6, $variableNbWords = true),
        'body' => $faker->sentence($nbWords = 10, $variableNbWords = true),
        'school_id' => rand(1, 20),
    ];
});
