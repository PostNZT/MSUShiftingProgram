<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\View\View;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;

class StudentRequestDetailsPageController extends Controller
{
    public function __invoke(Student $student) : View
    {
        return \view('staff.student.request.details', \compact('student'));
    }
}
