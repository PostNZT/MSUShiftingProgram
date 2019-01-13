<?php

namespace MnkyDevTeam\Admin\Http\Controllers\Student;

use Illuminate\View\View;
use App\Entities\Misc\Gender;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;
use App\Entities\Misc\CivilStatus;
use App\Entities\Misc\ShiftingStatus;

final class AdminStudentDetailsPageController extends Controller
{
    public function __invoke(Student $student) : View
    {
        $genders = Gender::all();
        $civil_statuses = CivilStatus::all();
        $shifting_statuses = ShiftingStatus::all();

        return \view('admin::student.listing.details', \compact(
          'student',
          'genders',
          'civil_statuses',
          'shifting_statuses'
        ));
    }
}
