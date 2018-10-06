<?php

use Faker\Generator as Faker;

$factory->define(App\Entities\Employee\Employee::class, function (Faker $faker) {
    return [  
		'first_name'        		   	=> $faker->firstName,
        'middle_name'       			=> $faker->lastName,
        'last_name'         			=> $faker->lastName,
        'gender'                        => $faker->randomElements(['male', 'female'])[0],
        'birthdate'                     => $faker->date,
        'employee_id'					=> '2015-8338',
        'role_id'                       => 2,
        'is_authorize'					=> false
    ];
});