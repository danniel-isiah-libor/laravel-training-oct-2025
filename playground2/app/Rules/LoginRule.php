<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LoginRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = User::where('email', '=' , $value)->first();

        $hashedPassword = $user->password;
        $password = request()->password;

        if (!Hash::check($password, $hashedPassword)) {
            $fail('Invalid Credentials Provided.');
        }
        
        //if (!Auth::attempt(['email' => $value, 'password' => $password])){
        //    $fail ('Invalid Credentials Provided.');
        //}

        //if (Str::contains($password, $firstName)){
        //    $fail('Password should not contain your first name.');
        //}
    }
}
