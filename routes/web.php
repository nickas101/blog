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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/post/{id}/edit', 'PostsController@edit')->name('edit');
Route::get('/home/post/create', 'PostsController@create')->name('create');
Route::post('/home/post/add', 'PostsController@add')->name('add');
Route::post('/home/post/{id}/update', 'PostsController@update')->name('update');
Route::get('/home/post/{id}/delete', 'PostsController@delete')->name('delete');
