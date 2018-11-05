<?php

declare(strict_types=1);

namespace App\Traits\UploadCSV;

use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Storage;
use App\Entities\Student\StudentRecordRaw;

trait UploadStudentRecordTrait
{
    public function uploadStudentRecord(object $file, Employee $staff)
    {
        $safe_name = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), "_");
        $file_name = "{$safe_name}.{$file->getClientOriginalExtension()}";
        $file_path = Storage::disk('student-records')->putFileAs('files/attendance/import', $file, $file_name);
        $staff_id = $staff->id;
        StudentRecordRaw::recordStudentFile($file_name, $file_path, $staff_id);
    }
}
