<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\View\View;
use App\Entities\Misc\Gender;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;
use App\Entities\Misc\CivilStatus;

final class StudentDetailsPageController extends Controller
{
    public function __invoke(Student $student) : View
    {
        $genders = Gender::all();
        $civil_statuses = CivilStatus::all();

        return \view('counselor::student.listing.details', \compact(
          'student',
          'genders',
          'civil_statuses'
        ));
    }
}
