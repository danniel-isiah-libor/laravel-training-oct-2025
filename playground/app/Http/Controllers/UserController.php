<?php
namespace App\Http\Controllers;

use App\Http\Requests\User\LoginRequest;
use App\Http\Requests\User\StoreRequest;
use App\Models\User;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller

{
    public function signUp(Request $request)
    {
        dd($request);
    }

    public function userProfile($id = null)
    {
        return 'User Profile Page ' . ($id ? 'for user ID: ' . $id : '');
    }

    public function userSetting()
    {
        return 'User Settings Page from Controller';
    }

    public function regexName($name)
    {
        return 'User Name: ' . $name;
    }

    public function profile($id)
    {
        $user = User::getData();
        return $user();
    }

    public function store(StoreRequest $request)
    {
        $validatedForm = $request->validated();

        User::create($validatedForm);

        // User::create(
        //     [
        //         'name'=>validatedForm['name'],
        //         'email'=>validatedForm['email'],
        //         'password'=>validatedForm['password']
        //     ]
        // );


        // User::insert([
        //     $validatedForm
        // ]);

        return redirect()->route('login');
    }

    public function login(LoginRequest $request)
    {
        $validated = $request->validated();

        $user = new User();
        $user->email = $validated['email'];

        Auth::login($user);
        redirect()->route('dashboard');
    }
}
