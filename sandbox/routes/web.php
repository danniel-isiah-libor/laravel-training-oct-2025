<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// ===========================================================================================================
// ===========================================================================================================
// ===========================================================================================================
// ===========================================================================================================

// // // -------------------- Request types
//     // Route::get('/', function () {});
//     // Route::post('/', function () {});
//     // Route::put('/', function () {});
//     // Route::patch('/', function () {});
//     // Route::delete('/', function () {});

// // // -------------------- Route grouping and name declaration
// // user/dashboard
// // user/profile
// // user/setting
//     Route::prefix('/user')->name('user.')->group(function() {
//         Route::get('/', function(){
//             // return '<h1 style="font-size:100px; color:red;">User Page</h1>';
//             // return "<script>alert('alert works!');</script>";
//             // return [
//             //     '1',
//             //     '2',
//             //     '3',
//             //     '4',
//             //     '5',
//             // ];
//             // return "First Name "."Last Name";
//         })->name('index');

//         Route::get('/dashboard', function () {
//             return "User Dashboard Page";
//         })->name('dashboard');

//         Route::get('/profile/{id?}', [UserController::class, 'profile'])->name('profile');
        
//         Route::get('/setting', function () {
//             return "User Setting Page";
//         })->name('setting');
//     });

// // Redirect
//     Route::redirect('/user/dashboard', '/user/profile');
//     Route::get('/from', function() {
//         return redirect('/user/setting');
//     });

// // Custom Error Page
//     Route::fallback(function() {
//         return 'This is a custom error page';
//     });

// // ---------------------------------------------------------------
//     Route::get('/signup', [UserController::class, 'signUp']);

//     Route::get('/company/{id?}', [CompanyController::class, 'company'])->name('company');


//     // [
//     //     1 => [
//     //         'company_name' => 'Inventive Media',
//     //         'position' => 'Software Developer',
//     //         'tenure' => '2020-01-15 - 2022-06-30'
//     //     ],
//     //     1 => [
//     //         'company_name' => 'Inventive Media',
//     //         'position' => 'Software Developer',
//     //         'tenure' => '2020-01-12 - 2022-06-30'
//     //     ],
//     // ]


// ===========================================================================================================
// ===========================================================================================================
// ===========================================================================================================
// ===========================================================================================================

Route::view('/register', 'register')->name('register');
Route::post('/register', [UserController::class, 'store'])->name('user.store');

Route::view('/login', 'login');
Route::post('/login', [UserController::class, 'login'])->name('user.login');

Route::get('/logout', function(){
    // auth()->logout();
    Auth::logout();
    return redirect()->route('user.login');
});