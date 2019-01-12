<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Entities\Student\Student;
use Illuminate\Support\Facades\Auth;
use App\Entities\Student\StudentShiftingStatusLog;

final class StudentUpdateShiftingStatusController extends Controller
{
    public function __invoke(Student $student, Request $request)
    {
        $data = $request->post();
        unset($data['_token']);

        $old_status = $student->shifting_status_id;
        $employee_name = Auth::guard('counselor')->user()->username;
        // dd($employee);

        if($data['shifting_status_id'] == 1) {
            $student->shifting_status_id = $data['shifting_status_id'];
            $student->number_times_shifted += 1;
            $student->save();

            //temporary code due to time constraint!
            //needs to debug
            StudentShiftingStatusLog::create([
                'old_status_id'     => $old_status,
                'new_status_id'     => $data['shifting_status_id'],
                'employee_name'     => $employee_name
            ]);

        }elseif ($data['shifting_status_id'] == 2) {
            $student->shifting_status_id = $data['shifting_status_id'];
            $student->save();

            StudentShiftingStatusLog::create([
                'old_status_id'     => $old_status,
                'new_status_id'     => $old_status,
                'employee_name'     => $employee_name
            ]);
        }

        return \redirect()->route('counselor.student.listing.details', \compact('status', 'student'));
    }
}
