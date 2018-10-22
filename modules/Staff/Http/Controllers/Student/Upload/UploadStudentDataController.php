<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Upload;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class UploadStudentDataController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::student.upload');
    }
}
