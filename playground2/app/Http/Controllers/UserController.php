<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\User\LoginRequest;
use Illuminate\Support\Facades\Auth;

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
        $validateForm=$request->validate(); 
        User::create($validateForm); //option 1

        //$user = new User(); // option 2
        //$user->name = $validateForm['name'];
        //$user->email = $validateForm['email'];
        //$user->password = $validateForm['password'];
        //$user->save();

        //User::insert([ //option 3
          //  [
          //  'name' => $validateForm['name'],
          //  'email' => $validateForm['email'],
          //  'password' => $validateForm['password'],
          //  ],
            //[
            //'name' => 'Jane Doe',
            //'email' => 'jane@mail.com,
            //'password' => 'password',
            //]
        //]);

        return redirect()->route('user.login');
    }

    public function login(LoginRequest $request)
    {
        $validateForm = $request->validated();

        $user = new User();
        $user->email = $validateForm['email'];
        
        Auth::login($user);
        dd(Auth::user()); // auth()->user()
    }
}