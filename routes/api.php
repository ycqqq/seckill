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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kill', function (Request $request) {
//    Cache::put('count', 2, \Illuminate\Support\Carbon::now()->addYear());

    if (Cache::get('count') < 0) return 0;

    if (Cache::decrement('count') >= 0) {
        return 1;
    }

    return 0;
});

Route::get('/get', function (Request $request) {
    return Cache::get('count');
});

Route::get('/set', function (Request $request) {
    Cache::put('count', 100, \Illuminate\Support\Carbon::now()->addYear());

    return 'ok';
});
