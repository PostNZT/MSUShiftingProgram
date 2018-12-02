<?php

declare(strict_types = 1);

namespace Tests\Helpers;

use App\Entities\Employee\Role;
use App\Entities\Student\Student;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Hash;

trait StaffFactoryHelper
{
    public function fakeUserWithAuth(
        string $username = 'username',
        string $password = 'password'
    ) : Employee {
        return \factory(Employee::class)->create([
            'username'  => $username,
            'password'  => Hash::make($password),
            'is_authorize' => false
        ]);
    }

    public function fakeStaff(
        string $firstName = "Jhune Carlo",
        string $lastName = "Trogelio",
        string $middleName = "B",
        string $username = 'jtrogelio',
        string $password = '$2y$10$s9Z2YbWwdRRyK6hW5lrxN.PXYj94yZlLRdJ6Jz8pAXkaI/sHc4K9.'
    ) : Employee {
        return \factory(Employee::class)->create([
            'first_name'    => $firstName,
            'middle_name'   => $middleName,
            'last_name'     => $lastName,
            'username'      => $username,
            'password'      => $password
        ]);
    }
    //
    // public function generateDummyStudentInfo(
    //       string $firstName             = "Richard",
    //       string $middleName            = "B",
    //       string $last_name             = "Dickenson",
    //       integer $student_id           = "2018-8338",
    //       integer $gender               = 0,
    //       integer $age                  = 23,
    //       string $civil_status          = 2,
    //       integer $old_course_id        = 1,
    //       integer $old_college_id       = 1,
    //       integer $new_course_id        = 1,
    //       integer $new_college_id       = 1,
    //       integer $year_level           = 2,
    //       string $contact_no            = '09123456789',
    //       string $campus_address        = "MSU-Marawi City",
    //       string $guardian_name         = "Roger T. Echo",
    //       string $guardian_address      = "Okinawa, Japan",
    //       string $guardian_number       = "09123456789",
    //       string $guardian_relationship = "father",
    //       integer $number_times_shifted = 1
    //   ) : array {
    //       return \factory(Student::class)
    //           ->make([
    //             'first_name'              => $firstName,
    //             'middle_name'             => $middleName,
    //             'last_name'               => $lastName,
    //             'student_id'              => $student_id,
    //             'gender'                  => $gender,
    //             'age'                     => $age,
    //             'civil_status'            => $civil_status,
    //             'old_course_id'           => $old_course_id,
    //             '$old_college_id'         => $old_college_id,
    //             'new_course_id'           => $new_course_id,
    //             'new_college_id'          => $new_college_id,
    //             'year_level'              => $year_level,
    //             'contact_no'              => $contact_no,
    //             'campus_address'          => $campus_address,
    //             'guardian_name'           => $guardian_name,
    //             'guardian_address'        => $guardian_address,
    //             'guardian_relationship'   => $guardian_relationship,
    //             'number_times_shifted'    => $number_times_shifted
    //           ])->toArray();
    //   }

}
