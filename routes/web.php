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
    return view('register.index');
});

Route::get('register','RegisterController@index');

Route::get('student','SearchController@index');

Route::get('grades','GradesController@index');

Route::post('register', 'RegisterController@save');

Route::get('grades','GradesController@index');

Route::get('search', ['as' => 'search', 'uses' => 'SearchController@find']);