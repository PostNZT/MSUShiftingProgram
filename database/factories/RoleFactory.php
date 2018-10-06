<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Employee\Role::class, function (Faker $faker) {
    return [
        'name'			=> $faker->jobTitle,
        'slug'			=> str_slug($faker->jobTitle),
        'is_authorize'	=> (bool) random_int(0, 1)
    ];
});