<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Laravel\Prompts\Concerns\Fallback;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', fn() =>  view('welcome'))->name('welcome');


// ========================== Discussed =============================\\
Route::get('/a', fn() => 1234);

Route::get('/b', fn() => dd('TEST'));

Route::get('/c', fn() => '<h1 style="background-color:red">TEST</h1>');

Route::get('/d', fn() => 'TEST');

Route::get('/e', fn() => '<script>alert("TEST");</script>');

Route::get('/f', fn() => '<script>alert("TEST");</script>');

// using prefix
Route::prefix('/user')->name('user.')->group(function () {
    Route::get('/dashboard', fn() => 'dashboard')->name('dashboard');
    Route::get('/test2', fn() => 'settings')->name('setting');
});

//Using redirect
Route::get('/from', fn() => redirect()->route('user.dashboard'));

// Using Fallback
Route::fallback(fn() => 'FALLBACK');


// Using dynamic routes
Route::prefix('/dynamic')->name('dynamic')->group(function () {

    Route::get('/required/{id}', fn(int $id) => "this is required: $id")->name('required');

    Route::get('/optional1/{name?}', fn(?string $name = null) => "This is optional1: $name")->name('optional1');

    Route::get('/optional2/{name?}', fn(?string $name = null) => "This is optional1: $name")->name('optional2');
});



// // Rules in routes sample

// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->where('name', '[A-Za-z]+');
// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->where('id', '[0-9]+');
// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);

// Route::get('/search/{search}', function (string $search) {
//     return $search;
// })->where('search', '.*');


////Rules with helper

// Route::get('/user/{id}/{name}', function (string $id, string $name) {
//     // ...
// })->whereNumber('id')->whereAlpha('name');
// Route::get('/user/{name}', function (string $name) {
//     // ...
// })->whereAlphaNumeric('name');
// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUuid('id');
// Route::get('/user/{id}', function (string $id) {
//     // ...
// })->whereUlid('id');
// Route::get('/category/{category}', function (string $category) {
//     // ...
// })->whereIn('category', ['movie', 'song', 'painting']);


//// Using Request
// get query values
Route::get('signup', fn(Request $request) => dd($request->query()));
// get post values
Route::get('signup', fn(Request $request) => dd($request->request()));
// get all values
Route::get('signup', fn(Request $request) => dd($request->all()));
// get specific values
Route::get('signup', fn(Request $request) => dd($request->name));






// ========================== Explore =============================\\
Route::prefix('/test')->name('test.')->group(function () {

    Route::get('/sample', fn() => 'sample')->name('sample');

    Route::prefix('/sample')->name('sample.')->group(function () {
        Route::get('/test1', fn() => 'test1')->name('test1');
        Route::get('/test2', fn() => 'test2')->name('test2');
    });
});
