<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class DashboardController extends Controller
{
    public function __invoke() : View
    {
        $user = Auth::guard('counselor')->user();

        return \view('counselor::user.dashboard', \compact('user'));
    }
}
