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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

// Authentication routes...
Route::get('login', [
    'uses' => 'Auth\AuthController@getLogin',
    'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
    'uses' => 'Auth\AuthController@getLogout',
    'as' => 'logout'
]);

// Registration routes...
Route::get('register', [
    'uses' => 'Auth\AuthController@getRegister',
    'as' => 'register'
]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');


Route::resource('users', 'UserController');

Route::pattern('customers', '[0-9]+');
Route::resource('customers', 'CustomerController');
Route::get('customers/exportar-excel/{name?}/{contact?}', 'CustomerController@exportExcel');
Route::get('customers/file/{id}', 'CustomerController@file');
Route::post('customers/add/{id}', 'CustomerController@add');
Route::get('customers/delete-file/{id}', 'CustomerController@deleteFile');

Route::pattern('prospects', '[0-9]+');
Route::resource('prospects', 'ProspectController');
Route::get('prospects/convertir-prospecto/{id}', 'ProspectController@convertProspect');
Route::get('prospects/exportar-excel/{name?}/{contact?}', 'ProspectController@exportExcel');


Route::resource('sellers', 'SellerController');
Route::get('sellers/exportar-excel/{name?}/{last_name?/{key?}', 'SellerController@exportExcel');

Route::resource('machines', 'MachineController');
