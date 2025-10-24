<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class KeiController extends Controller
{
    public function signup()
    {
        Route::get('/signup', function (Request $request) {
    //dd($request->name);
    // pretend logic here ...

    });

    /*public function worker($id)
    {
        $user = User::getData();
        return 'User Profile Page for User ID: ' . $user->name;
    }

    /*public function profile($id)
    {
        $user = User::getData();
        return 'User Profile Page for User ID: ' . $user->name;
    }  
    
    Route::fallback(function () {
    return 'The page you are looking for does not exist. <a href="/">Go to Home Page</a>'; //default fallback route or 404 page
    });*/
}
}
