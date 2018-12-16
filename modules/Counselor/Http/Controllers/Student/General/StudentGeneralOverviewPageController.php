<?php

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\General;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

class StudentGeneralOverviewPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('counselor::student.general.overview');
    }
}
