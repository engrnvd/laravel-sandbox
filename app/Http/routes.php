<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource("profile","ProfileController");

Route::resource("api/task","api\TaskController");
Route::post("api/authenticate", "api\AuthenticateController@authenticate");

Route::get("/tasks","TaskController@index");
Route::post('/task', 'TaskController@store');
Route::delete('/task/{task}', 'TaskController@destroy');

Route::get('/test', function(){
    return view("test.index");
});

Route::get('user/view', "UserController@view");

// Authentication Routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration Routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('/', "UserController@index");

Route::resource('person','PersonController');
Route::resource('phone','PhoneController');