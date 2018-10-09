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

/*---------------------- User Route ---------------------*/
Route::get('/', 'User\HomeController@index')->name('user.home.index');

Route::get('/find-rooms', 'User\HomeController@findRooms')->name('user.home.find_rooms');
/*-------------------------------------------------------*/

/*---------------------- Admin Route --------------------*/
Route::group(['prefix' => 'admin'], function() {
	
});
/*-------------------------------------------------------*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
