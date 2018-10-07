<?php

declare(strict_types = 1);

namespace Tests\Helpers;

use App\Entities\User\User;
use App\Entities\Employee\Role;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Hash;

trait CounselorFactoryHelper
{
    public function fakeUserWithAuth(string $username = 'username', string $password = 'password') : User
    {
        return \factory(User::class)->create([
            'username'  => $username,
            'password'  => Hash::make($password),
        ]);
    }

    public function fakeCounselor(string $firstName = "Jhune Carlo", string $lastName = "Trogelio", string $middleName = "B") : User
    {
        return \factory(User::class)->create([
            'first_name'    => $firstName,
            'middle_name'   => $middleName,
            'last_name'     => $lastName,
        ]);
    }


}