<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
                'unique:users',
                'alpha_dash',
            ],
            'email' => [
                'required',
                'email',
                'unique:users',
            ],
            'password' => [
                'required',
                'min:6',
                'confirmed',
            ],
        ];
    }

    public function messages()
    {
        return [
            'required' => __('message.blank_error'),
            'max' => __('message.maximum_characters_error'),
            'email.email' => __('message.email'),
            'alpha_dash' => __('message.space'),
        ];
    }
}
