<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use function PHPUnit\Framework\isNull;

class LoginRules implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string, ?string=): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // $user = User::where('email', $value)->first();
        // // dd($value);
        // if (!$user){
        //    $fail('No user found');
        // }
        // $hashedPassword = $user->password;
        // $password = request()->password;

        // if(!Hash::check($password,$hashedPassword)){
        //     $fail('invalid credentials');
        // }

        if (!Auth::attempt(['email'=>$value, 'password'=>request()->password])){
            $fail('Invalid credentials');
        }

    }
}
