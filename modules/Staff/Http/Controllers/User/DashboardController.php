<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Auth;

final class DashboardController extends Controller
{
    public function __invoke(Employee $employee) : View
    {
        $staff = Auth::guard('staff')->user();

        return \view('staff::user.dashboard', \compact('staff', 'employee'));
    }
}
