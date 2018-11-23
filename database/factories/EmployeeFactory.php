<?php

declare(strict_types=1);

use Faker\Generator as Faker;

$factory->define(App\Entities\Employee\Employee::class, function (Faker $faker) {
    return [
		    'first_name'      => 'Jhune Carlo',
        'middle_name'     => 'b',
        'last_name'       => 'Trogelio',
        'gender'          => $faker->randomElements(['male', 'female'])[0],
        'birthdate'       => $faker->date,
        'uuid'            => $faker->uuid,
        'employee_id'		  => '2015-8338',
        'role_id'         => 2,
        'is_authorize'	  => false,
        'username'        => 'jtrogelio',
        'password'        => '$2y$10$s9Z2YbWwdRRyK6hW5lrxN.PXYj94yZlLRdJ6Jz8pAXkaI/sHc4K9.'
    ];
});
