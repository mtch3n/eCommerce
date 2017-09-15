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

//Route::get('/Admin/home', 'HomeController@index')->name('/Admin/home');

//Route::get('admin/index','Admin\UserController@index')->name('/admin/home');

Route::resource('admin', 'Admin\UserController');
