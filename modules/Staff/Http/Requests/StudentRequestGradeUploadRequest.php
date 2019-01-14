<?php

namespace MnkyDevTeam\Staff\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class StudentRequestGradeUploadRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            return ['grades_csv' => 'required|file|mimetypes:text/csv,text/plain,application/vnd.ms-excel'];
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return Auth::guard('staff')->check();
    }
}
