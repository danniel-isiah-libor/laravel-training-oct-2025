<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;

Route::get('/', function () {
    return view('welcome')->name('index');
});

Route::get('/user', function () {
    // dd('User route accessed');
    return json_decode('{"name": "John", "age": 30, "city": "New York"}');
});

Route::prefix('user')->name('user.')->group(function () {
    Route::get('/profile/{id?}', [UserController::class, 'profile'])->name('profile');

    Route::get('/settings', [UserController::class, 'userSetting'])->name('settings');

    Route::get('/regex/{name}', [UserController::class,'regexName'])->where('name', '[A-Za-z]+')->name('regex');
});

Route::fallback(function () {
    return 'The page you are looking for does not exist.';
});
// Route::redirect('/from', '/user/settings',301);

Route::get('/signup', [UserController::class, 'signUp']);


Route::get('/companies',[CompanyController::class,'companyInfo']);

Route::get('/work-experience/{id?}', [CompanyController::class, 'workExperience']);