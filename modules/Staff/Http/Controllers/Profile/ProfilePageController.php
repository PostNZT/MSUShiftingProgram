<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Profile;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class ProfilePageController extends Controller
{
    public function __invoke() : View
    {
        $staff = Auth::guard('staff')->user();
        return \view('staff::profile.details', \compact('staff'));
    }
}
