<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'username' => [
                'required',
                'max:50',
            ],
            'password' => [
                'required',
                'min:6',
            ],
        ];
    }
    public function messages()
    {
        return [
            'required' => ':attribute còn trống',
            'username.max' => 'Username có tối đa :max kí tự',
            'password.min' => 'Password có ít nhất :min kí tự',
        ];
    }
}
