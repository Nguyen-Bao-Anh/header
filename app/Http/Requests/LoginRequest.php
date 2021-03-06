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
                'alpha_dash',
            ],
            'password' => [
                'required',
                'min:6',
                'alpha_dash',
            ],
        ];
    }
    public function messages()
    {
        return [
            'required' => __('message.blank_error'),
            'username.max' => __('message.maximum_characters_error'),
            'password.min' => __('message.minimum_characters_error'),
            'alpha_dash' => __('message.without_space'),
        ];
    }
}
