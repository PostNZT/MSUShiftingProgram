<?php

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Entities\Student\Student;
use MnkyDevTeam\Staff\Http\Requests\GradeImportRequest;

class StudentRequestUploadGradesController extends Controller
{
    public function __invoke(Request $request, Student $student)
    {
        $date = Carbon::now();
        $batch = Carbon::now()->format('YmdHisv');
        $file = $request->file('grades_csv');
        $safe_name = str_slug(pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME), "_");
        $file_name = "{$safe_name}.{$file->getClientOriginalExtension()}";
        $path = Storage::disk('local')->putFileAs($this->import_path, $file, $file_name);
            $tmp_path = realpath($file);

        $attendanceCsv = Reader::createFromPath($tmp_path, 'r');
        $attendanceCsv->setHeaderOffset(0);
        $records = $attendanceCsv->getRecords(['no', 'dn', 'uid', 'name',
            'status', 'action', 'apb', 'jobcode', 'datetime', 'batch_file',
            'file_path'
          ]);
        $datas = [];
        foreach ($records as $index => $row) {
            $data = [];

            foreach ($row as $key => $value) {
                $data[trim($key)] = $value;
            }
            $data['name'] = strtoupper(str_replace(" ", "", $data['name']));
            $data['datetime'] = Carbon::parse(trim($row['datetime']));
            $data['uid'] = Uuid::uuid4()->toString();
            $data['batch_file'] = $batch;
            $data['file_path'] = $path;
            $data['created_at'] = $date;
            array_push($datas, $data);
            AttendanceRaw::create($data);
        }

        return \redirect(\route('office.hr.attendance.listing'));


    }
}
