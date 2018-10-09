<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class DashboardController extends Controller
{
    public function __invoke() : View
    {
        $staff = Auth::guard('staff')->user();

        return \view('staff::user.dashboard', \compact('staff'));
    }
}
