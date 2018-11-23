<?php

declare(strict_types=1);

use Faker\Generator as Faker;

$factory->define(App\Entities\Student\Student::class, function (Faker $faker) {
    return [
        'first_name'            => 'Jhune Carlo',
        'middle_name'           => 'B.',
        'last_name'             => 'Trogelio',
        'student_id'            => '2015-8338',
        'gender'                => $faker->randomElements(['male', 'female'])[0],
        'age'                   => 23,
        'civil_status'          => 'Married',
        'old_college_id'        => 1,
        'old_course_id'         => 1,
        'new_college_id'        => 1,
        'new_course_id'         => 1,
        'year_level'            => 2,
        'contact_no'            => '0912345678',
        'campus_address'        => 'MSU-Marawi City',
        'guardian_name'         => 'Roger D. Echo',
        'guardian_address'      => 'Okinawa, Japan',
        'guardian_number'       => '0912345789',
        'guardian_relationship' => 'father',
        'number_times_shifted'  => 1,
    ];
});
