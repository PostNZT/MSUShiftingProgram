<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Controllers\Employee;

use Ramsey\Uuid\Uuid;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Entities\Employee\Employee;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;

final class EmployeeDetailsUpdateInfoController extends Controller
{
    public function __invoke(Employee $employee, Request $request)
    {
        $data = $request->post();
        //need to add picture upload
        dd($data['first_name']);


  //       $employee = new file;

        // $employee->first_name 		= Input::get('first_name');
  //       $employee->middle_name      = Input::get('middle_name');
  //       $employee->last_name        = Input::get('last_name');
  //       $employee->employee_id      = Input::get('employee_id');
  //       $employee->birthdate        = Input::get('birthdate');
  //       $employee->role_id          = Input::get('role_id');

  //       if (Input::hasFile('picture')) {
  //       	$picture = Input::file('picture');
  //       	$picture->move(avatars. '/' . $picture->getClientOriginalName());

  //       	$employee->picture = $picture->getClientOriginalName();

  //       }

  //       $employee->save();

        return \redirect(\route('admin.employee.details', \compact('employee')))
                ->with('message', 'Successfully Updated Employee Information');
    }
}
