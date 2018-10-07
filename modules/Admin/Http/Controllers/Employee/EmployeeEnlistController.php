<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use MnkyDevTeam\Admin\Http\Requests\EnlistEmployeeRequest;

final class EmployeeEnlistController extends Controller
{
    public function __invoke(EnlistEmployeeRequest $request)
    {
        $data = $request->post();
        $roleChecker = $this->filterInitialEmployeeInfo($data);

        if ($roleChecker['role_id'] == 1) {
            $employee = Employee::enlistEmployeeAsCounselor($this->filterInitialEmployeeInfo($data));
        } else {
            $employee = Employee::enlistEmployeeAsStaff($this->filterInitialEmployeeInfo($data));
        }
            
        // dd(route('admin.employee.details', \compact('employee')));
        return \redirect(\route('admin.employee.details', \compact('employee')));
    }

    private function filterInitialEmployeeInfo(array $data) : array
    {
        return [
            'first_name'        => $data['first_name'],
            'middle_name'       => $data['middle_name'],
            'last_name'         => $data['last_name'],
            'employee_id'       => $data['employee_id'],
            'birthdate'         => $data['birthdate'],
            'role_id'           => $data['role_id']
        ];
    }
}
