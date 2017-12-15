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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('/kill', 'Api\Controller@kill');
Route::get('/get', 'Api\Controller@get');
Route::get('/set', 'Api\Controller@set');
Route::get('/1', 'Api\Controller@test');
