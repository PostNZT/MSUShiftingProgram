<?php

declare(strict_types=1);

namespace App\Entities\Student;

use Illuminate\Database\Eloquent\Model;

final class StudentRecordRaw extends Model
{
    protected $guarded = [];

    public static function recordStudentFile($file_name, $file_path, $staff_id) : self
    {
        dd($file_name, $file_path, $staff_id);
    }
}
