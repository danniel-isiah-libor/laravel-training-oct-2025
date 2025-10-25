<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        // dd($request);


    }

    public function profile($id = null)
    {
        $user = User::getData();

        return "User Profile Name: " . $user->name;
    }

    public function store(StoreRequest $request)
    {
        // dd($request->all());

        // Validate the incoming request data
        // Tip: horizontal validation rules are easier to read
        $validatedData = $request->validated();

        dd($validatedData);

        if (!$validatedData) {
            return redirect()->back()->withErrors($validatedData)->withInput();
        }

        $user = new User();
        $user->name = $validatedData['name'];
        $user->email = $validatedData['email'];
        $user->password = bcrypt($validatedData['password']);
        // $user->save();

        return "User registered successfully: " . $user->name;
    }
}
