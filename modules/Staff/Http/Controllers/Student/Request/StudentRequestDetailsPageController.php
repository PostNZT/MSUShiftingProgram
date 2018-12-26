<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\View\View;
use App\Entities\Misc\Gender;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;
use App\Entities\Misc\CivilStatus;

class StudentRequestDetailsPageController extends Controller
{
    public function __invoke(Student $student) : View
    {
        $genders = Gender::all();
        $civil_statuses = CivilStatus::all();
        return \view('staff::student.request.details', \compact(
          'student',
          'genders',
          'civil_statuses'
        ));
    }
}
