<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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
}
