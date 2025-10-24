<?php

use Illuminate\Support\Facades\Route;
use App\Models\WorkExperience;

// Route: all work experiences
Route::get('/workexperience', function () {
    $work = WorkExperience::getData(); // lahat ng data
    return view('workexperience', compact('work'));
});

// Route: single work experience by ID
Route::get('/workexperience/{id}', function ($id) {
    $work = WorkExperience::getDataById($id);
    return view('workexperience', compact('work', 'id'));
});



// Route::prefix('customer')->name('user.')->group(function () {
//     Route::get('/profile/{id?}', [UserController::class, 'profile'])
//         ->where('id', '[0-9]+')
//         ->name('profile');
// });
// Route::get('/signup', [UserController::class, 'signUp'])->name('signup');
// Route::get('/signup', [UserController::class, 'signUp'])->name('signup');
