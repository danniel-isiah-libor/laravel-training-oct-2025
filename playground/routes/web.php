<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    // return '<h1 style=color:red> User Page </h1>';
    // return '<script> alert("Welcome to User Page") </script>';
    //return "Francis"." Ferrer";
});

Route::prefix('/customer')->name('user.') -> group(function () {
    Route::get('/profile/{id?}', function ($id = null) {
        return "User Profile Page for User ID: " .$id;
    })->name('profile');

    Route::get('/dashboard', function () {
        return "User Dashboard Page";
    })->name('dashboard');

    Route::get('/settings', function () {
        return "User Settings Page";
    })->name('settings');
});

Route::redirect('/from', '/to');

Route::get('/from', function () {
    return redirect()->route('user.profile');
});