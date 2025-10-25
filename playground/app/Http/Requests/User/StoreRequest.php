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
            'name' => [
                'required',
                'string',
                'max:255'
            ],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                'unique:users,email'
            ],
            // 'password' => [
            //     'required',
            //     'string',
            //     'min:8',
            //     'confirmed',
            //     // Password::min(8)->
            //     //     mixedCase()->
            //     //     letters()->
            //     //     numbers()->
            //     //     symbols()->
            //     //     uncompromised()
            // ]
        ];
    }
    public function messages(): array //custom error messages
    {
        return [
            'name.required' => 'The.',
            'email.required' => 'The email field is required.',
            'email.email' => 'The email must be a valid email address.',
            'email.unique' => 'The email has already been taken.',
            'password.required' => 'The password field is required.',
            'password.min' => 'The password must be at least :min characters.',
            'password.confirmed' => 'The password confirmation does not match.'
        ];
    }

    protected function prepareForValidation() //unang mag execute bago mag validate
    {
        // $this->merge([
        //     'name' => trim($this->name),
        //     'email' => trim($this->email),
        //     'password' => trim($this->password),
        // ]);

        // dd($this->all());
    }
}
