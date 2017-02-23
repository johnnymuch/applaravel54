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

Route::get('/', function () {
    return view('welcome');
});

Route::post('auth/login', 'Api\AuthenticateController@login');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('/category','CategoryController');

Route::group(['prefix' => 'gift'], function () {
 	Route::get('/index', ['uses'=>'GiftController@index', 'as'=>'index']);
 	Route::get('/create', ['uses'=>'GiftController@create', 'as' => 'create']);

});
