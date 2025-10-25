<?php

namespace App\Http\Requests\User;

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
            'name' => 'required|string|max:255',
            'email' => 'required|unique:users,email', //email:rfc,dns,strict,spoof|
            'password' => [
                'required',
                // Password::min(8)
                //     ->max(32)
                //     ->symbols()
                //     ->numbers()
                //     ->letters()
                //     ->uncompromised(),

            ],
            'password_confirmation' => 'required|confirmed',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Ruireder nganiho ito',
        ];
    }

    public function prepareForValidation()
    {
        $id = 1;
        $this->merge([
            'user_id' => $id
        ]);
    }
}
