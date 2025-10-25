<?php

namespace App\Http\Requests\User;

use App\Rules\LoginRules;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => [
                'required',
                'string',
                new LoginRules
            ],
            'password' => [
                'required',
                'string'
            ],
        ];
    }

    public function messages()
    {
        return [
            'password' =>"Make sure you input password"
        ];
    }
}
