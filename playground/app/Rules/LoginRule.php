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
        $user = User::where('email', '=', $value)->first();

        $hashedPassword = $user->password; // shfsbgsrgiurgb
        $password = request()->password; // admin123

        if (!Hash::check($password, $hashedPassword)) {
            $fail('Invalid credentials provided.');
        }

        if (!Auth::attempt(['email' => $value, 'password' => $password])) {
            $fail('Invalid credentials provided.');
        }

        // if (Str::contains($password, $firstName)) {
        //     $fail('The password should not contain your first name.');
        // }
    }
}
