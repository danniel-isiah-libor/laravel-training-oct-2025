<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function signUp(Request $request){
        // logic here .....

        dd(User::getData());
    }

    public function profile($id = null){
        $user = User::getData();

        return 'User Profile Page: '.$user->name;
    }
}
