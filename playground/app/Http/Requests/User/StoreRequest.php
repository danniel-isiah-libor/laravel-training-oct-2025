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
            'user_id' => [
                'required',
                'integer',
            ],
            'name' => [
                'required',
                'string',
                'max:255',
            ],
            'email' => [
                'required',
                'string',
                'email', // :dns,rfc,strict,spoof,filter
                'unique:users,email',
            ],
            'password' => [
                'required',
                'string',
                // 'min:8',
                // 'max:12',
                'confirmed',
                Password::min(8)
                    ->max(12)
                    ->symbols()
                    ->mixedCase()
                    ->numbers()
                    ->letters()
                    ->uncompromised()
            ]
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'This field is required!',
        ];
    }

    protected function prepareForValidation()
    {
        $id = 1; // from session...

        $this->merge([
            'user_id' => $id,
        ]);
    }
}
