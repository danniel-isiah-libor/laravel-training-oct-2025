<?php

namespace App\Rules;

use App\Models\User;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $password = request()->password;

        if (!Auth::attempt(['email' => $value, 'password' => $password])) {
            $fail("The provided credentials are incorrect.");
        }


        //Optional manual validation without Auth facade

        // $user = User::where('email', $value)->first();
        // $hashedPassword = $user ? $user->password : null;

        // if (!Hash::check($password, $hashedPassword)) {
        //     $fail("The provided credentials are incorrect.");
        // }
    }
}
