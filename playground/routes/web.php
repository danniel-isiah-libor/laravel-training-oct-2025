<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    // return '<h1 style="color: red"> User Page </h1>';
    // return '<script> alert("User Page"); </script>';
    // return [1, 2, 3];
    // return "First Name" . "Last Name";
});

// user/profile
// user/dashboard
// user/settings
// user/.....
Route::prefix('/customer')->name('user.')->group(function () {
    Route::get('/profile/{id?}', [UserController::class, 'profile'])
        ->where('id', '[0-9]+')
        ->name('profile');

    Route::get('/dashboard', function () {
        return 'User Dashboard Page';
    })->name('dashboard');

    Route::get('/settings', function () {
        return 'User Settings Page';
    })->name('settings');
});

Route::redirect('/from', '/to');
// Route::get('/from', function () {
//     return redirect()->route('user.profile');
// });

Route::fallback(function () {
    return 'The page you are looking for does not exist.';
});

Route::get('/signup', [UserController::class, 'signUp']); // new way
// Route::get('/signup', 'UserController@signUp'); // old way

Route::get('/work-experiences/{id?}', [WorkExperienceController::class, 'show']);

// Route::get('/register', function () {
//     // logic ....
//     return view('register');
// });

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::post('/register', [UserController::class, 'store'])->name('user.store');
