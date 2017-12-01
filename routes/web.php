<?php

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

Route::get('/admin', 'Admin\AdminController@index');

Route::get('/login', 'Admin\Auth\LoginController@index');
Route::post('/admin/login', 'Admin\Auth\LoginController@login');
Route::get('/admin/logout', 'Admin\Auth\LoginController@logout');

Route::get('/sign', 'Admin\Auth\SignController@index');
Route::post('/admin/sign','Admin\Auth\SignController@sign');


Route::get('/admin/goods', 'Admin\Goods\GoodsController@index');

Route::get('/test', function (){
    dd(Hash::make(123));
});