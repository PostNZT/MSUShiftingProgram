<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\General;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class GeneralStudentDataPageController extends Controller
{
    public function __invoke() : View
    {
    	$staff = Auth::guard('staff')->user();

        return \view('staff::student.general', \compact('staff'));
    }
}
