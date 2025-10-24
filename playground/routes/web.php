<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkExperienceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',function () {
    return"<h1>user page</h1>";
});

Route::prefix('/customer')->name('user.')->group(function () {
    Route::get('/profile/{id?}',[UserController::class,'profile'])->where('id','[0-9]+')->name('profile');

    Route::get('/dashboard',function () {
        return "user dashboard page";
    })->name('dashboard');

    Route::get('/settings',function () {
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

    Route::get('/signup',[UserController::class, 'signUp']);

    Route::get('/work-experience/{id?}',[WorkExperienceController::class,'show'])->where('id','[0-9]+');
