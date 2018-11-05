<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Traits\UploadCSV\UploadStudentRecordTrait;

final class UploadStudentDataController extends Controller
{
    use UploadStudentRecordTrait;

    public function __invoke(Request $request) : RedirectResponse
    {
        $staff = Auth::guard('staff')->user();
        $file = $request->file('student_csv');
        $this->uploadStudentRecord($file, $staff);

        return \redirect(\route('staff.student'));
    }
}
