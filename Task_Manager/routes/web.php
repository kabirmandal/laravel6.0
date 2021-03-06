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

Route::get('/', 'TodoController@index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('view/{id}', 'TodoController@view');
Route::get('create', 'TodoController@create');
Route::post('create_post', 'TodoController@create_post');
Route::get('edit/{id}', 'TodoController@edit');
Route::post('update', 'TodoController@update');
Route::get('delete/{id}', 'TodoController@delete');
