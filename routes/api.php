<?php

use Illuminate\Http\Request;

use App\Http\Resources\UserCollection;
use App\User;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['middleware'=>'auth:api'], function(){

	// Route::resource('city', 'CityController');

});

	Route::resource('city', 'CityController');


Route::get('/user', function(){

	return new UserCollection(User::all());

});


Route::get('city/{id}', 'CityController@show');

// file upload via api

Route::resource('file','FileUpploadController');
