<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\General;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class GeneralStudentDataPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::student.general');
    }
}
