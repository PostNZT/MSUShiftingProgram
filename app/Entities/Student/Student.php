<?php

declare(strict_types=1);

namespace App\Entities\Student;

use Ramsey\Uuid\Uuid;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;
    protected $guarded = [];

    public static function enlistStudentRequest(array $data) : self
    {
        $data['uuid'] = Uuid::uuid4();
        $data['shifting_status'] =  false;
        $student = Student::firstOrCreate($data);

        return $student;
    }

    public function getFullNameAttribute() : string
    {
        return $this->first_name . " " . $this->last_name;
    }

    public function getRouteKeyName() : string
    {
        return 'uuid';
    }

    public function picture() : string
    {
        return $this->picture ? asset('storage/avatars/'.$this->picture) : asset('img/user.jpg');
    }
}
