<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\View\View;
use App\Entities\Misc\Gender;
use App\Entities\Programs\Course;
use App\Entities\Programs\College;
use Illuminate\Routing\Controller;
use App\Entities\Misc\CivilStatus;

final class StudentRequestPageController extends Controller
{
    public function __invoke() : View
    {
    	$genders = Gender::all();
    	$courses = Course::all();
    	$colleges = College::all();
    	$civil_statuses = CivilStatus::all();

        return \view('staff::student.request.listing', 
        	\compact(
        		'genders', 
        		'courses',
        		'colleges',
        		'civil_statuses'
        	));
    }
}
