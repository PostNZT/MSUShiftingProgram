<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\User;

use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

final class ProfileController extends Controller
{
    public function __invoke() : View
    {
        $user = Auth::guard('admin')->user();

        return \view('admin::user.dashboard', \compact('user'));
    }
}
