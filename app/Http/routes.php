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

// Patterns
Route::pattern('id', '[0-9]+');

Route::get('/', 'WelcomeController@index');

// History
Route::get('history', 'HistoryController@index');
Route::get('history/{id}', 'HistoryController@view');

// Users
Route::get('users', 'UsersController@index');
Route::get('users/{username}', 'UsersController@view');
