<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;


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
}
