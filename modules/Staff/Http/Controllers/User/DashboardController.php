<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use App\Entities\Employee\Role;

final class DashboardController extends Controller
{
    public function __invoke() : View
    {
        $staff = Auth::guard('staff')->user();
        $roles = Role::all();

        return \view('staff::user.dashboard', \compact('staff', 'roles'));
    }
}
