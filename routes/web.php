<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'usuarios'], function() {
  Route::get('',        ['as' => 'users.index',  'uses' => 'UserController@index']);
  Route::get('novo',    ['as' => 'users.create', 'uses' => 'UserController@create']);
  Route::post('gravar', ['as' => 'users.store',  'uses' => 'UserController@store']);
});
