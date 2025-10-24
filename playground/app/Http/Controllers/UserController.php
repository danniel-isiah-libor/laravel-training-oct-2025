<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Method for GET /signup
    public function signUp()
    {
        // Return a signup view (create this view next)
        return view('signup');
    }

    public function profile ($id)
    {
        $user = User::getData();
        return 'User Profile Page:' . $user->name;
    }
}
