<?php

declare(strict_types=1);

namespace App\Entities\Employee;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

final class Employee extends Authenticatable
{
    use Notifiable;
    protected $guarded = [];

    public static function generateUsername($first_name, $last_name, $middle_name = "") : string
    {
        $username = "";
        $fnameSegment = "";
        $mnameSegment = "";
        $lnameSegment = str_slug($last_name, '');

        foreach (explode(" ", $first_name) as $name) {
            $fnameSegment .= substr(str_slug($name, ''), 0, 1);
            $check = strtolower($fnameSegment.$lnameSegment);
            if (Employee::where('username', $check)->count() === 0) {
                $username = $check;
                break;
            }
        }

        if (! empty($username)) {
            return $username;
        }

        foreach (explode(" ", $middle_name) as $name) {
            $mnameSegment .= substr(str_slug($name, ''), 0, 1);
            $check = strtolower($fnameSegment.$mnameSegment.$lnameSegment);

            if (Employee::where('username', $check)->count() === 0) {
                $username = $check;
                break;
            }
        }

        return $username;
    }

    public static function enlistEmployeeAsCounselor(array $data) : self
    {
        $data['username'] = self::generateUsername($data['first_name'], $data['last_name'], $data['middle_name']);
        $data['password'] = Hash::make($data['username']);
        $data['is_authorize'] = true;
        $employee = Employee::firstOrCreate($data);

        return $employee;
    }

    public static function enlistEmployeeAsStaff(array $data) : self
    {
        $data['username'] = self::generateUsername($data['first_name'], $data['last_name'], $data['middle_name']);
        $data['password'] = Hash::make($data['username']);
        $data['is_authorize'] = false;
        $employee = Employee::firstOrCreate($data);

        return $employee;
    }
}
