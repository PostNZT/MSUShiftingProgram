<?php

declare(strict_types = 1);

namespace Tests\Helpers;

use App\Entities\User\User;
use App\Entities\Employee\Role;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Hash;

trait AdminFactoryHelper
{
    public function fakeUserWithAuth(
        string $username = 'username',
        string $password = 'password'
    ) : User {
        return \factory(User::class)->create([
            'username'  => $username,
            'password'  => Hash::make($password),
        ]);
    }

    public function fakeAdmin(
        string $firstName = "Jhune Carlo",
        string $lastName = "Trogelio",
        string $middleName = "B"
    ) : User {
        return \factory(User::class)->create([
            'first_name'    => $firstName,
            'middle_name'   => $middleName,
            'last_name'     => $lastName,
        ]);
    }

    public function generateDummyEmployeeInfo(
        string $firstName = "Jhune Carlo",
        string $middleName = "B",
        string $lastName = "Trogelio",
        string $employee_id = "2015-8338",
        string $birthdate = '1978-02-03',
        int $role_id = 1
    ) : array {
        return \factory(Employee::class)
            ->make([
                'first_name'        => $firstName,
                'middle_name'       => $middleName,
                'last_name'         => $lastName,
                'employee_id'       => $employee_id,
                'birthdate'         => $birthdate,
                'role_id'           => $role_id
            ])->toArray();
    }

    public function fakeRole() : Role
    {
        return \factory(Role::class)->create();
    }

    public function fakeEmployee(
        string $firstName = "Jhune Carlo",
        string $middleName = "B",
        string $lastName = "Trogelio",
        string $employee_id = "2015-8338",
        string $birthdate = '1978-02-03',
        string $username = 'jtrogelio',
        string $password = '$2y$10$s9Z2YbWwdRRyK6hW5lrxN.PXYj94yZlLRdJ6Jz8pAXkaI/sHc4K9.'
    ) : Employee {
        $role = $this->fakeRole();
        return \factory(Employee::class)->create([
            'first_name'        => $firstName,
            'middle_name'       => $middleName,
            'last_name'         => $lastName,
            'employee_id'       => $employee_id,
            'birthdate'         => $birthdate,
            'role_id'           => $role->id,
            'username'          => $username,
            'password'          => $password
        ]);
    }
}
