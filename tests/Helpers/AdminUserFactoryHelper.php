<?php

declare(strict_types = 1);

namespace Tests\Helpers;

use App\Entities\User\User;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Hash;

trait AdminUserFactoryHelper
{
    public function fakeUserWithAuth(string $username = 'username', string $password = 'password') : User
    {
        return \factory(User::class)->create([
            'username'  => $username,
            'password'  => Hash::make($password),
        ]);
    }

    public function fakeAdmin(string $firstName = "Jhune Carlo", string $lastName = "Trogelio", string $middleName = "B") : User
    {
        return \factory(User::class)->create([
            'first_name'    => $firstName,
            'middle_name'   => $middleName,
            'last_name'     => $lastName,
        ]);
    }

    public function generateDummyEmployeeInfo(
        string $firstName   = "Jhune Carlo",
        string $middleName  = "B", 
        string $lastName    = "Trogelio",
        string $birthdate   = '1978-02-03',
        int $role_id        = 1
    ) : array {
        return \factory(Employee::class)
            ->make([
                'first_name'        => $firstName,
                'middle_name'       => $middleName,
                'last_name'         => $lastName,
                'birthdate'         => $birthdate,
                'role_id'           => $role_id
            ])->toArray();
    }
}