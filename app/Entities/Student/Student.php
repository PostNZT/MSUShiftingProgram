<?php

declare(strict_types=1);

namespace App\Entities\Student;

use Ramsey\Uuid\Uuid;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Student extends Model
{
    use Notifiable;
    protected $guarded = [];

    public static function enlistStudentRequest(array $data) : self
    {
        $data['uuid'] = Uuid::uuid4();
        $student = Student::firstOrCreate($data);

        return $student;
    }

    public function picture() : string
    {
        return $this->picture ? asset('storage/avatars/'.$this->picture) : asset('img/user.jpg');
    }
}
