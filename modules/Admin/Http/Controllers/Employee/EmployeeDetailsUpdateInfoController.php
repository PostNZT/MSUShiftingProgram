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
        unset($data['_token']);

        //IMPLEMENT IMAGE UPLOAD
        // dd($data);
        // $file = $request->file('image');
        // $filename = Uuid::uuid4()->toString().'-'. str_slug(now(), '-').'.'.$file->getClientOriginalExtension();
        // $path = $file->storeAs('/', $filename, 'avatars');
        //
        // if ($employee->picture) {
        //     Storage::disk('avatars')->delete($employee->picture);
        // }
        // $employee->picture = $path;

        $employee->first_name         = $data['first_name'];
        $employee->middle_name        = $data['middle_name'];
        $employee->last_name          = $data['last_name'];
        $employee->employee_id        = $data['employee_id'];
        $employee->birthdate          = $data['birthdate'];

        $employee->save();


        return \redirect(\route('admin.employee.details', \compact('employee')))
                ->with('message', 'Successfully Updated Employee Information');
    }
}
