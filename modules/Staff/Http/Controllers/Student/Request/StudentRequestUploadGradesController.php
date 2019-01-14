<?php

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Carbon\Carbon;
use League\Csv\Reader;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Entities\Student\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Entities\Student\StudentGradeInformation;

class StudentRequestUploadGradesController extends Controller
{
    protected $import_path = 'files/grades/import';

    public function __invoke(Request $request, Student $student)
    {
        $employee = Auth::guard('staff')->user();
        $date = Carbon::now();
        $batch = Carbon::now()->format('YmdHisv');
        $file = $request->file('grades_csv');
        $data = $request->post();
        unset($data['_token']);
        $safe_name = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), "_");
        $file_name = "{$safe_name}.{$file->getClientOriginalExtension()}";
        $path = Storage::disk('local')->putFileAs($this->import_path, $file, $file_name);
            $tmp_path = realpath($file);

        $gradesCSV = Reader::createFromPath($tmp_path, 'r');
        $gradesCSV->setHeaderOffset(0);
        $records = $gradesCSV->getRecords(['semester', 'school_year',
            'subject_code', 'section',
            'description', 'grade'
          ]);
        $datas = [];
        foreach ($records as $index => $row) {
            $data = [];

            foreach ($row as $key => $value) {
                $data[trim($key)] = $value;
            }
            $data['student_id'] = $student->student_id;
            $data['username'] = $employee->username;
            $data['staff_name'] = $employee->fullName;
            $data['batch_file'] = $batch;
            $data['file_path'] = $path;
            $data['created_at'] = $date;
            array_push($datas, $data);
            StudentGradeInformation::create($data);
        }

        return \redirect(\route('staff.student.request.details', $student));


    }
}
