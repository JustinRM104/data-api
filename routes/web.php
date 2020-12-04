<?php

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
    return view('home');
});

Route::get('/api-get/{user_secret_code}/{db_code}', "ApiController@get")->name('api.get');
Route::post('/api-post/{user_secret_code}/{db_code}', "ApiController@post")->name('api.post');

Route::get('/login', "UserController@login")->name('auth.login');
Route::get('/register', "UserController@register")->name('auth.register');
Route::get('/profile', "UserController@profile")->name('profile.home');