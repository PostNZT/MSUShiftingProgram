<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\View\View;
use App\Entities\Student\Student;
use Illuminate\Routing\Controller;

final class StudentDetailsPageController extends Controller
{
    public function __invoke(Student $student) : View
    {
        return \view('counselor::student.listing.details', \compact('student'));
    }
}
