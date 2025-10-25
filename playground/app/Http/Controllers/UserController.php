<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\UpdateRequest;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        // dd($request->date('birthdate')->timezone('Asia/Manila')->format('Y-m-d H:i:s'));

        // logic here ....
    }

    public function profile($id = null)
    {
        $user = User::getData();

        return 'User Profile Page: ' . $user->name;
    }

    public function store(StoreRequest $request)
    {
        // Validate form
        $validatedForm = $request->validated();

        // Encrypt password before saving
        $validatedForm['password'] = Hash::make($validatedForm['password']);

        // ✅ Option 1 (Corrected - this one now works properly)
        User::create($validatedForm);

        // Option 2 (still valid - manual way)
        /*
    $user = new User();
    $user->name = $validatedForm['name'];
    $user->email = $validatedForm['email'];
    $user->password = Hash::make($validatedForm['password']);
    $user->save();
    */

        // Option 3 (for multiple inserts)
        /*
    User::insert([
        [
            'name' => $validatedForm['name'],
            'email' => $validatedForm['email'],
            'password' => Hash::make($validatedForm['password']),
        ],
        [
            'name' => 'Edmar',
            'email' => 'edmar@example.com',
            'password' => Hash::make('12345678'),
        ]
    ]);
    */

        // Redirect to login page after successful registration
        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $validatedForm = $request->validated();

        $user = new User();
        $user->email = $validatedForm['email'];

        Auth::login($user);
        dd(Auth::user());
    }
}
