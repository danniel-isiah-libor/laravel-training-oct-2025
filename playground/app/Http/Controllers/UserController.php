<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\StoreRequest;
use App\Http\Requests\User\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function signUp(Request $request)
    {
        dd($request->date('birthdate')->format('Y-m-d H:i:s'));
    }

    public function profile($id = null)
    {
        $user = User::getData();

        return 'User Profile Page: ' .$user->name;
    }

    public function store(StoreRequest $request)
    {
        $validatedForm = $request->validated();

        //option 1
        User::create($validatedForm); //this will work because $validatedForm is already an associative array
        if($validatedForm){
            return redirect()->route('login');
        }

        //option 2
        // $user = new User();
        // $user->name = $validatedForm['name'];
        // $user->email = $validatedForm['email'];
        // $user->password = bcrypt($validatedForm['password']);
        // $user->save();

        //option 3
        // User::insert([                      //insert is usually used for bulk insertions e.g. CSV Imports, Excel Uploads, etc.
        //     'name' => $validatedForm['name'],
        //     'email' => $validatedForm['email'],
        //     'password' => $validatedForm['password'],
        // ]);

    }

    public function login(LoginRequest $request)
    {
        $validatedForm = $request->validated();

        $user = new User();
        $user->email = $validatedForm['email'];

        Auth::login($user);

        return redirect()->route('dashboard');
    }

}
