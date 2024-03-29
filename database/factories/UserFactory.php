<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
 */

$factory->define(kindergestion\User::class, function (Faker $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'user_type' => $faker->randomElement($array = array('ADMIN', 'TUTOR')),
        'password' => bcrypt('123'),
        'school_id' => rand(1,20),
        'remember_token' => str_random(10),
    ];
});
