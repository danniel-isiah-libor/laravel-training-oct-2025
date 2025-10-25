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

        $hashPassword = $user->password;
        $password = request()->password;

        if(!Hash::check($password, $hashPassword)) {
            $fail('Invalid credentials provided.');
        }

        if(!Auth::attempt(['email' => $value, 'password' => $password])) {
            $fail('Invalid credentials provided.');
        }
        
    }
}
