<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;

final class StudentRequestUpdateController extends Controller
{
    public function __invoke(Student $student, Request $request)
      {
        $data = $request->post();
        unset($data['_token']);

        $student->gender_id              = $data['gender_id'];
        $student->age                    = $data['age'];
        $student->campus_address         = $data['campus_address'];
        $student->guardian_name          = $data['guardian_name'];
        $student->guardian_address       = $data['guardian_address'];
        $student->guardian_number        = $data['guardian_number'];
        $student->guardian_relationship  = $data['guardian_relationship'];
        $student->updated_at             = Carbon::now();
        $student->save();

        return \redirect()->route('staff.student.request.details', $student)->with('message', "Successfully Updated");
    }
}
