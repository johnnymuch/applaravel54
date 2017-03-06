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

//Route::get('api/todo', ['uses' => 'TodoController@index','middleware'=>'simpleauth']);
//Route::post('api/todo', ['uses' => 'TodoController@store','middleware'=>'simpleauth']);


// user role
// Route::group(["middleware"=>"user"], function(){
// 	Route::get('index', functin(){
// 		echo "Hello";
// 	});
// });

Route::group(['prefix' => 'auth'], function () {
    Route::get('/', 'UserController@index');
    Route::get('/role', 'UserController@role');
    Route::get('/permission', 'UserController@permission');
   
});
