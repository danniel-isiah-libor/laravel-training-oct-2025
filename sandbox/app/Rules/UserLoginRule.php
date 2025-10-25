<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserLoginRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // // Option 1:
        // $user           = User::where('email', '=', $value)->first();
        // $hashedPassword = $user->password;
        // $password       = request()->password;

        // if (!Hash::check($password, $hashedPassword)){
        //     $fail('Invalid credentials provided.');
        // }

        // Option 2:
        $password = request()->password;

        if (!Auth::attempt(['email' => $value, 'password' => $password])){
            $fail('Invalid credentials provided.');
        }
    }
}
