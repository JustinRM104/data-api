<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api', 'throttle:60,1')->group(function () {
    Route::get('/user', function () {
        echo "test";
    });
    Route::get('/get', 'ApiController@get')->name('api.get');
});

//Route::get('/get/{db_id}/{db_key}/{method_key}', 'ApiController@get')->name('api.get');


// iedere database van een user heeft een geheime code, alleen met die code kan de database worden aangepast.
// daarbij 