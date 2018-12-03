<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\Http\Request;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;
use Illuminate\Http\RedirectResponse;

final class StudentRequestDataController extends Controller
{
    public function __invoke(Request $request) : RedirectResponse
    {
        $data = $request->post();
        unset($data['_token']);

        $student = Student::enlistStudentRequest($this->filterInitialStudentInfo($data));

        return \redirect(\route('staff.student.request.details', \compact('student')));
    }

    private function filterInitialStudentInfo(array $data) : array
    {
        return [
            'first_name'    => $data['first_name'],
            'middle_name'   => $data['middle_name'],
            'last_name'     => $data['last_name'],
            'student_id'    => $data['student_id'],
            'gender_id'     => $data['gender_id'],
            'age'           => $data['age'],
            'civil_status_id' => $data['civil_status_id'],
            'old_college_id'  => $data['old_college_id'],
            'old_course_id'  => $data['old_course_id'],
            'new_college_id'  => $data['new_college_id'],
            'new_course_id'   => $data['new_course_id'],
            'year_level'      => $data['year_level'],
            'contact_no'      => $data['contact_no'],
            'campus_address'  => $data['campus_address'],
            'guardian_name'   => $data['guardian_name'],
            'guardian_address' => $data['guardian_address'],
            'guardian_number' => $data['guardian_number'],
            'guardian_relationship' => $data['guardian_relationship'],
            'number_times_shifted'  => $data['number_times_shifted']
        ];
    }
}
