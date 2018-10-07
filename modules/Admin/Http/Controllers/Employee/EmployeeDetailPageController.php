<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Illuminate\View\View;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use App\Entities\Employee\Role;

final class EmployeeDetailPageController extends Controller
{
    public function __invoke(Employee $employee) : View
    {
    	$roles = Role::all();
        return \view('admin::employee.details', \compact('employee', 'roles'));
    }
}
