<?php

use Illuminate\Routing\RouteUri;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('user',function () {
    return"<h1>user page</h1>";
});

Route::prefix('/customer')->name('user.')->group(function () {
    Route::get('/profile/{id?}',function ($id=null) {
        return "User profile page for User ID: ".$id;
    })->name('profile');
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


