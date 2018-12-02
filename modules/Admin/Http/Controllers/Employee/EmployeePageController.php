<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Illuminate\View\View;
use App\Entities\Employee\Role;
use Illuminate\Routing\Controller;

final class EmployeePageController extends Controller
{
    public function __invoke() : View
    {
        $roles = Role::all();

        return \view('admin::employee.listing', \compact('roles'));
    }
}
