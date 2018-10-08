<?php

declare(strict_types = 1);

namespace Tests\Helpers;

use App\Entities\Employee\Role;
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
}
