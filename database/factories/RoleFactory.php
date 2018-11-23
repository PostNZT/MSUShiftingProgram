<?php

declare(strict_types=1);

use Faker\Generator as Faker;

$factory->define(App\Entities\Employee\Role::class, function (Faker $faker) {
    return [
        'name'			=> $faker->jobTitle,
        'slug'			=> str_slug($faker->jobTitle)
    ];
});
