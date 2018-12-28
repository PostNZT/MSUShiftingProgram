<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Entities\Student\Student;

final class StudentUpdateShiftingStatusController extends Controller
{
    public function __invoke(Student $student, Request $request)
    {

        $data = $request->post();
        unset($data['_token']);

        //times shifted plus 1 after shifting
        $student->shifting_status_id = $data['shifting_status_id'];
        $student->save();

        return \redirect()->route('counselor.student.listing.details', \compact('status', 'student'));
    }
}
