<?php

namespace App\Http\Requests\User;

use App\Rules\UserRegisterPasswordRule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRequest extends FormRequest
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
            "user_id" => [
                "required"
            ],
            "name" => [
                "required",
                "string",
                "max:100",
            ],
            "email" => [
                "required",
                // "email:dns,rfc,strict,spoof,filter"
                "email",
                "unique:users,email",
            ],
            "password" => [
                "required",
                "string",
                "confirmed",
                Password::min(8)
                    ->max(16)
                    ->symbols() // Special characters require
                    ->mixedCase() // Upper and lower case required
                    ->numbers() // Password must contain number
                    ->letters() // Password must contain letters
                    ->uncompromised(),
                new UserRegisterPasswordRule
            ],
            
        ];
    }

    public function messages() // Custom error message
    {
        return [
            "password.confirmed" => "The password field confirmation does not match."
        ];
    }

    public function prepareForValidation() // Payload merging
    {
        $id = 1;

        $this->merge([
            'user_id' => $id
        ]);
    }
}
