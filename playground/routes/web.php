<?php

use App\Http\Controllers\KeiController;
use GuzzleHttp\Psr7\Request;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/user', function () {
    //return '<h1 style="color: red"> User Page </>';
    //return '<script>alert("Welcome to User Page")</script>';
    //return [2,1,4];
    return "First Name" . " " . "Last Name";
});

// user/profile
// user/settings
// user/dashboard
//  user/....

//Prefix or grouping of routes
Route::prefix('/customer')->name('user.')->group(function () {
    Route::get('/profile/{id?}', [KeiController::class, 'profile'])
    ->where ('id', '[0-9]+')
    ->name('profile');
    
    Route::get('/dashboard', function () {
        return 'User Dashboard Page';
    })->name('dashboard');

    Route::get('/setting', function () {
        return 'User Settings Page';
    })->name('setting');
});

//If duplicate endpoints are there, then the first one will be executed first as per the order of routes defined in this file or sequentially.
Route::redirect('/from', '/to'); //Redirect with no Alias Name
Route::get('/to', function () {
    return redirect()->route('user.profile'); //Redirect with Alias Name
});

Route::fallback(function () {
    return 'The page you are looking for does not exist. <a href="/">Go to Home Page</a>'; //default fallback route or 404 page
});

//Dynamic Parameters in Routes
Route::get('/user/{id}', function ($id) {
    return 'user'.$id;
});

Route::get('/signup', [KeiController::class, 'signup']);

//dd($request->name); //dd is user for debugging, purpose is to dump and die the output





