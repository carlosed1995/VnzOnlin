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
Route::get('Principales.index', function () {
    return view('Principales.index');
});
Route::get('/', 'PrincipalController@index');

Route::resource('allwork', 'PrincipalController@create');

Route::resource('index', 'IndexController@index');   
