<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Controllers\Auth;

use App\Entities\Employee\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use MnkyDevTeam\Staff\Http\Requests\StaffLoginRequest;

final class LoginController extends Controller
{
    public function __invoke(StaffLoginRequest $request)
    {
        if (Auth::guard('staff')->attempt(['username' => $request->username, 'password' => $request->password])) {
            $employee = Employee::where('username', $request->username)->first();

            if ($employee->is_authorize == false) {
                return redirect()->intended(route('staff.user.dashboard'));
            }

            return redirect()->intended(route('staff.login'));
        }

        return redirect()
            ->back()
            ->withInput($request->only('username'))
            ->withErrors('These credentials do not match our records.');
    }
}
