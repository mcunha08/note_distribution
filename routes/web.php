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
Route::get('/activate_student/{user}/{role}', 'AdministratorsController@activate');
Route::post('/register', 'RegistrationController@store');
Route::get('/login', 'SessionController@login');
Route::get('/logout', 'SessionController@destroy');
Route::post('/session', 'SessionController@store');
Route::get('/test', 'TestController@home');
Route::get('/upload', 'UploadController@file_upload');
Route::post('/upload', 'UploadController@store');
Route::post('/searchcourse', 'SearchController@course_search');
Route::get('/course_list', 'SearchController@list_all');
Route::get('/course_list/{id}', 'CoursesController@show');
Route::get('/subscribe/{course}', 'UserController@subscribe');
Route::get('/file_list', 'AdministratorsController@file_list');
Route::get('/file_delete/{id}', 'AdministratorsController@file_delete');
Route::get('/user_delete/{id}', 'AdministratorsController@user_delete');
Route::get('/create_post/{id}', 'PostsController@show');
Route::post('/create_post/{id}', 'PostsController@create');
Route::get('/posts/{id}', 'PostsController@show_post');
Route::post('/create_response/{id}', 'ResponseController@create');
Route::get('/users/{id}', 'UserController@profile');