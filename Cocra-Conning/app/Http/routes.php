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

Route::get('/', function () {
    return view('welcome');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('admin/auth/register', 'Auth\AuthController@getRegister');
Route::post('admin/auth/register', 'Auth\AuthController@postRegister');


Route::get('home', 'AdminController@index');
Route::get('admin/newProject', 'AdminController@createProject');
Route::post('admin/create', 'AdminController@createP');
Route::get('admin/tables', 'AdminController@tables');
Route::get('admin/WebSettings', 'WebsiteSettings@index');

// banner routes...
Route::post('admin/banner', 'WebsiteSettings@create_banner');
Route::get('admin/banner', 'WebsiteSettings@create_banner');