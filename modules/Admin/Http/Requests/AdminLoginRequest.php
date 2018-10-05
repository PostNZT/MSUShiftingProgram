<?php

declare(strict_types=1);

namespace MnkyDevTeam\Admin\Http\Requests;

use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Http\FormRequest;

class AdminLoginRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'username' => "required|string|min:1",
            'password' => "required|string|min:1",
        ];
    }

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return Auth::guest();
    }
}
