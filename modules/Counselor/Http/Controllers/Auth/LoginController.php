<?php

declare(strict_types=1);

namespace MnkyDevTeam\Counselor\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MnkyDevTeam\Counselor\Http\Requests\CounselorLoginRequest;

final class LoginController extends Controller
{
    public function __invoke(CounselorLoginRequest $request)
    {
        if (Auth::guard('counselor')->attempt(['username' => $request->username, 'password' => $request->password])) {
            return redirect()->intended(route('counselor.user.dashboard'));
        }

        return redirect()
            ->back()
            ->withInput($request->only('username'))
            ->withErrors('These credentials do not match our records.');
    }
}
