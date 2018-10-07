<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class EnlistEmployeeRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'first_name'    => 'required|regex:/^[\pL\s\-]+$/u|min:2',
            'middle_name'   => 'required|regex:/^[\pL\s\-]+$/u|min:1',
            'last_name'     => 'required|regex:/^[\pL\s\-]+$/u|min:2',
            'employee_id'    => 'required|min:4',
            'birthdate'     => 'required|date',
            'role_id'       => 'required|integer'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return Auth::guard('admin')->check();
    }

    public function messages() : array
    {
        return [
            'first_name.regex' => 'Given Name field can only contain letters, hyphens, and spaces.',
            'middle_name.regex' => 'Middle Name field can only contain letters, hyphens, and spaces.',
            'last_name.regex' => 'Last Name field can only contain letters, hyphens, and spaces.',
        ];
    }
}
