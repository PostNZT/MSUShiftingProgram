<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use MnkyDevTeam\Admin\Http\Requests\AdminResetPasswordRequest;

final class EmployeeDetailsResetPasswordController extends Controller
{
    public function __invoke(AdminResetPasswordRequest $request, Employee $employee)
    {
        $data = $request->post();
        $admin = Auth::guard('admin')->user();
  
        if (Hash::check($data['password'], $admin->password)) {
  
            $employee->password = \bcrypt($employee->username);
            $employee->save();
        
        	return \redirect(\route('admin.employee.details', \compact('employee')))
        		->with('message', 'Successfully Reset Password');
        }

        return \redirect(\route('admin.employee.details', \compact('employee')))
        		->with('Incorrect Password', 'default');
    } 
}