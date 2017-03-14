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

	    Route::get('/permissioncreate', 'UserController@permissionCreate');   
	    Route::post('/permissionstore', 'UserController@permissionStore');  

	    Route::get('/permissionshow/{id}','UserController@permissionShow'); 

	    Route::get('/permissionedit/{id}','UserController@permissionEdit');
	    Route::post('/permissionupdate/{id}','UserController@permissionUpdate');

	    Route::get('/useredit/{id}', 'UserController@userEdit');
	    Route::post('/userupdate/{id}', 'UserController@userUpdate');

	    Route::get('/roleedit/{id}', 'UserController@roleEdit');
	    Route::post('/roleupdate/{id}', 'UserController@roleUpdate');
	    Route::get('/roleshow/{id}','UserController@roleShow');

	});
});

// Auth::routes();

// Route::get('/home', 'HomeController@index');
