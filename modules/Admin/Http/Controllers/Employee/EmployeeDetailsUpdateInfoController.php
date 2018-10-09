<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

final class EmployeeDetailsUpdateInfoController extends Controller
{
    public function __invoke(Employee $employee, Request $request)
    {
        dd('hey');
    }
}
