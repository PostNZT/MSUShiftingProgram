<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Student;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Auth;

final class StudentPageController extends Controller
{
  public function __invoke() : View
  {
    $staff = Auth::guard('staff')->user();
    return \view('staff::student.listing', \compact('staff'));
  }
}
