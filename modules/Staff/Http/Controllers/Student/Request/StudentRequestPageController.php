<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Request;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class StudentRequestPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::student.request.listing');
    }
}
