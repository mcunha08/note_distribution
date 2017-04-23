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

Route::get('/', 'HomeController@home')->name('home');
Route::get('/register', 'RegistrationController@create');
Route::get('/users_list', 'AdministratorsController@list');
Route::get('/users_list/{user}', 'AdministratorsController@show');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@login');
Route::post('/session', 'SessionController@store');
