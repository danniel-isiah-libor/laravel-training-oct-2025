<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

// // -------------------- Request types
    // Route::get('/', function () {});
    // Route::post('/', function () {});
    // Route::put('/', function () {});
    // Route::patch('/', function () {});
    // Route::delete('/', function () {});

// // -------------------- Route grouping and name declaration
// user/dashboard
// user/profile
// user/setting
    Route::prefix('/user')->name('user.')->group(function() {
        Route::get('/', function(){
            // return '<h1 style="font-size:100px; color:red;">User Page</h1>';
            // return "<script>alert('alert works!');</script>";
            // return [
            //     '1',
            //     '2',
            //     '3',
            //     '4',
            //     '5',
            // ];
            // return "First Name "."Last Name";
        })->name('index');

        Route::get('/dashboard', function () {
            return "User Dashboard Page";
        })->name('dashboard');

        Route::get('/profile/{id?}', function ($id = null) {
            return "User Profile Page for User ID: ".$id;
        })->name('profile');
        
        Route::get('/setting', function () {
            return "User Setting Page";
        })->name('setting');
    });

// Redirect
    Route::redirect('/user/dashboard', '/user/profile');
    Route::get('/from', function() {
        return redirect('/user/setting');
    });

// Custom Error Page
    Route::fallback(function() {
        return 'This is a custom error page';
    });