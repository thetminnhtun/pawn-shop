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

// Route::get('/home', 'HomeController@index')->name('home');

Route::delete('customer/delete/{id}', 'Admin\CustomerController@forceDelete')->middleware('auth');

Route::get('customer/restore/{id}', 'Admin\CustomerController@restore')->middleware('auth');

Route::get('customer/search', 'Admin\CustomerController@search')->middleware('auth');

Route::get('/customer/export', 'Admin\CustomerController@export')->middleware('auth');

Route::get('/customer/trash', 'Admin\CustomerController@trash')->middleware('auth');

Route::resource('/customer','Admin\CustomerController')->middleware('auth');


