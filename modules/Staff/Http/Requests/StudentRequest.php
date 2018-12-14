<?php

declare(strict_types=1);

namespace MnkyDevTeam\Staff\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

final class StudentRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'first_name'    => 'required|regex:/^[\pL\s\-]+$/u|min:2',
            'middle_name'   => 'required|min:2',
            'last_name'     => 'required|regex:/^[\pL\s\-]+$/u|min:2',
            'student_id'    => 'required|string|min:4',
            'gender_id'     => 'required|integer',
            'age'           => 'required|integer|min:1|max:2',
            'civil_status_id' => 'required|integer',
            'old_college_id' => 'required|integer',
            'old_course_id' => 'required|integer',
            'new_college_id' => 'required|integer',
            'new_course_id' => 'required|integer',
            'year_level'    => 'required|integer',
            'contact_no'    => 'required|regex:/^09\d{9}$/s',
            'campus_address'  => 'required|string',
            'guardian_name' => 'required|string',
            'guardian_address' => 'required|string',
            'guardian_number' =>  'required|regex:/^09\d{9}$/s',
            'guardian_relationship' => 'required|string',
            'number_times_shifted' => 'required|integer'
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return Auth::guard('staff')->check();
    }

    public function messages() : array
    {
        return [
            'first_name.regex' => 'Given Name field can only contain letters, hyphens, and spaces.',
            'middle_name.regex' => 'Middle Name field can only contain letters, hyphens, and spaces.',
            'last_name.regex' => 'Last Name field can only contain letters, hyphens, and spaces.',
            'contact_no.regex'  => 'Contact Number field should match the format: 09XXXXXXXXX',
            'guardian_number.regex'  => 'Guardian Number field should match the format: 09XXXXXXXXX'
        ];
    }
}
