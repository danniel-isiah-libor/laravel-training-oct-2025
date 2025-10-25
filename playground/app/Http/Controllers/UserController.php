<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // public function signup(Request $request)
    // {
    //     // return dd(date('Y-m-d'));

    //     // User::create([
    //     //     "name" => $request->name,
    //     //     "email" => $request->email,
    //     //     "password" => $request->password
    //     // ])
    // }

    // public function profile($id = null)
    // {
    //     // //Getting defined data in the model that assumed that connected to the database
    //     // $user = User::getData();
    //     // return dd($user->name);



    //     // //Assumed that theres a data in the database and the task is get the all data in the database if the id is not existing

    //     $user = User::find($id);

    //     return dd($user);
    // }


    public function store(StoreRequest $request)
    {
        $validated =  $request->validated();
        User::create($validated);
        return redirect()->route('login.view');
    }


    public function login(LoginRequest $request)
    {
        $user = new User();
        $user->email = $request->validated();
        Auth::login($user);
        return redirect()->route('welcome');
    }
}
