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
	App::setlocale('en');
    return view('welcome');
});

Route::resource('/lists','MemolistController');

Route::get("/lists/{id}/destroy","MemolistController@destroy");

Route::resource('/sublists','SublistController');

Route::get("/sublists/create/{id}","SublistController@create");

Route::get("/sublists/{id}/destroy","SublistController@destroy");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/changeStatus/{id}","SublistController@changeStatus");

// mailtrap route

Route::get('test-mail', 'TestMailController@TestMail');

// file uploading 

Route::get('uploadfile', 'HomeController@showfilepage');

// 

Route::post('uploadfile', 'HomeController@uploadfile');


