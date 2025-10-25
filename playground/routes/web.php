<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use function Pest\Laravel\get;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user', function () {
    return "<h1>user page</h1>";
});

Route::prefix('/customer')->name('user.')->group(function () {
    Route::get('/profile/{id?}', [UserController::class, 'profile'])->where('id', '[0-9]+')->name('profile');

    // Route::get('/dashboard', function () {
    //     return "user dashboard page";
    // })->name('dashboard');

    Route::get('/settings', function () {
        return "user settings page";
    })->name('settings');
});

// Route::redirect('/from','/to');

Route::get('/from', function () {
    return redirect()->route('user.profile');
});

// Route::get('/signup',function (Request $request) {
//     dd($request);
// });

Route::fallback(function () {
    return "The page you are looking for does not exist!";
});

Route::get('/signup', [UserController::class, 'signUp']);

Route::get('/work-experience/{id?}', [WorkExperienceController::class, 'show'])->where('id', '[0-9]+');

// Route::get('/register', function () {
//     return view('register');
// })->name('register');

// Route::get('/login', function () {
//     return view('login');
// })->name('login');

Route::view('/register', 'register')->name('register');
Route::view('/login', 'login')->name('login');

Route::post('/register', [UserController::class, 'store'])->name('user.store');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('user.dashboard');
Route::get('/logout', function (Request $request) {
    Auth::logout();

    return redirect()->route('login')->with('success', 'User logged out successfully.');
})->name('user.logout');
