<?php

use Faker\Generator as Faker;

$factory->define(kindergestion\Room_Tutor::class, function (Faker $faker) {
    return [
        'room_id' => rand(1, 140),
        'tutor_id' => rand(1, 100),
    ];
});
