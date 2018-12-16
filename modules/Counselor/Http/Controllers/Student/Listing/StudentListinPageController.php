<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Student\Listing;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class StudentListinPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('counselor::student.listing.page');
    }
}
