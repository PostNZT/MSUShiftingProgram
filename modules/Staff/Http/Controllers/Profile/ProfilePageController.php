<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Profile;

use Illuminate\View\View;
use Illuminate\Routing\Controller;

final class ProfilePageController extends Controller
{
    public function __invoke() : View
    {
        return \view('staff::profile.details');
    }
}
