<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student\Upload;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class UploadStudentPageController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::student.upload.upload-csv');
    }
}
