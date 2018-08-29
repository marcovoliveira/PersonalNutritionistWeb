<?php

use Illuminate\Http\Request;

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

//Route::post('register', 'Api\Auth\RegisterController@register');
// Registo por API desativado!
Route::post('login', 'Api\Auth\LoginController@login');
Route::post('refresh', 'Api\Auth\LoginController@refresh');

Route::middleware('auth:api')->group(function () {
    Route::post('logout', 'Api\Auth\LoginController@logout');

    Route::get('plano', 'Api\FoodPlanApiController@index');

    Route::get('messages', 'Api\ChatApiController@index');

    Route::post('newMessage', 'Api\ChatApiController@post');

});

