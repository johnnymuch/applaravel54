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

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/login', 'LoginController@index');
Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/student', 'StudentController@index');

Route::group(['middleware' => 'auth'], function () 
{
	Route::group(['prefix' => 'auth'], function () 
	{
	    Route::get('/', 'UserController@index');
	    Route::get('/role', 'UserController@role');
	    Route::get('/usercreate', 'UserController@userCreate');
	    Route::get('/permission', 'UserController@permission');	   
	    Route::post('/userstore', 'UserController@userStore');
	    	   
	    Route::get('/rolecreate', 'UserController@roleCreate');	   
	    Route::post('/rolestore', 'UserController@roleStore');	   
	});
});
