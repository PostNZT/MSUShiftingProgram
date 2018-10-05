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

$factory->define(App\Entities\User\User::class, function (Faker $faker) {
    return [
    	'first_name'        => $faker->firstName,
        'middle_name'       => $faker->lastName,
        'last_name'         => $faker->lastName,
        'username'          => $faker->unique()->userName,
        'password'          => '$2y$12$DnIcVNHOpZP8URBphopyYe08kNZfYnW3/ofDo5b7sydfH4SlwLPi6', // msu.admin
        'remember_token'    => str_random(100),
        'api_token'         => str_random(100),
    ];
});
