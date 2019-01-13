<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Student;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

final class StudentListingPageController extends Controller
{
    public function __invoke()
    {
        return \view('admin::student.listing.page');
    }
}
