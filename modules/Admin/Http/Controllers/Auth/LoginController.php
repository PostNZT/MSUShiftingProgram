<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MnkyDevTeam\Admin\Http\Requests\AdminLoginRequest;

final class LoginController extends Controller
{
    public function __invoke(AdminLoginRequest $request) 
    {
        if (Auth::guard('admin')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended(route('admin.user.dashboard'));
        }

        return redirect()
            ->back()
            ->withInput($request->only('username'))
            ->withErrors('These credentials do not match our records.');
    }
}
