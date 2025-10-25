<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

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
        $validatedForm = $request->validated();

        // option 1:
        User::create($validatedForm);

        // option 2:
        // $user = new User();
        // $user->name = $validatedForm['name'];
        // $user->email = $validatedForm['email'];
        // $user->password = $validatedForm['password'];
        // $user->save();

        // option 3:
        // User::insert([
        //     [
        //         'name' => $validatedForm['name'],
        //         'email' => $validatedForm['email'],
        //         'password' => $validatedForm['password'],
        //     ],
        //     $validatedForm,
        // ]);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $validatedForm = $request->validated();

        $user = new User();
        $user->email = $validatedForm['email'];

        Auth::login($user);

        dd(Auth::user()); // auth()->user()
    }
}
