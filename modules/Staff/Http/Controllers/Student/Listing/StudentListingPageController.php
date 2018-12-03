<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Listing;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

final class StudentListingPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::student.listing.page');
    }
}
