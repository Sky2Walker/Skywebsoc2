<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', 'App\Http\Controllers\MainController@index');
Route::get('/profilepage', 'App\Http\Controllers\ProfileController@profilePage');
Route::get('/profile', 'App\Http\Controllers\ProfileController@profile');
Route::get('/profilefeed', 'App\Http\Controllers\ProfileController@userFeed');

Route::get('/', function () {
    return redirect('/register');
});


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@register');
Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');

Route::get('/{username}', 'UserProfileController@showProfile');



