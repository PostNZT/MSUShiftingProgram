<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Auth;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

final class LogoutController extends Controller
{
    public function __invoke() : RedirectResponse
    {
        Auth::guard('staff')->logout();
        return \redirect(\route('staff.login'));
    }
}
