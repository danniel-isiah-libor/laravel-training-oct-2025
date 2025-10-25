<?php

namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function store(StoreRequest $request){
        $validatedForm = $request->validated();

        // Shortcut if the array keys are the same with the table columns
        // User::create($validatedForm);

        // Option 1:
        User::create([
            'name'     => $validatedForm['name'],
            'email'    => $validatedForm['email'],
            'password' => $validatedForm['password']
        ]);

        // // Option 2:
        // $user = new User();
        // $user->name     = $validatedForm['name'];
        // $user->email    = $validatedForm['email'];
        // $user->password = $validatedForm['password'];
        // $user->save();

        // // Option 3 (Bulk saving):
        // User::insert([
        //     [
        //         'name'     => $validatedForm['name'].'-1',
        //         'email'    => $validatedForm['email'].'-1',
        //         'password' => $validatedForm['password'].'-1'
        //     ],
        //     [
        //         'name'     => $validatedForm['name'].'-2',
        //         'email'    => $validatedForm['email'].'-2',
        //         'password' => $validatedForm['password'].'-2'
        //     ],
        //     [
        //         'name'     => $validatedForm['name'].'-3',
        //         'email'    => $validatedForm['email'].'-3',
        //         'password' => $validatedForm['password'].'-3'
        //     ]
        // ]);

        return redirect()->route('user.login');
    }

    public function login(LoginRequest $request){
        $validatedForm = $request->validated();

        $user = new User();
        $user->email = $validatedForm['email'];

        Auth::login($user);

        dd(Auth::user());
    }
}
