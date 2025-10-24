<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        // return dd(date('Y-m-d'));

        // User::create([
        //     "name" => $request->name,
        //     "email" => $request->email,
        //     "password" => $request->password
        // ])
    }

    public function profile($id = null)
    {
        // //Getting defined data in the model that assumed that connected to the database
        // $user = User::getData();
        // return dd($user->name);



        // //Assumed that theres a data in the database and the task is get the all data in the database if the id is not existing

        $user = User::find($id);

        return dd($user);
    }
}
