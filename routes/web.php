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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
* basic rout
*/

Route::get('basic', function(){
	return 'hello world';
});

Route::get('/names', 'NamesController@index');

/**
 * response to multiple http response
 */

Route::match(['get','post'], '/names', 'NamesController@index');

/**
 * Response to all http requests.
 */

// Route::any('/names', 'NamesController@index');


// Route::get('/names', function(){
// 	return view('layouts.names');
// });

// Route::view('/welcome', 'layouts.index', ['name' => 'Taylor']);

/**
 * ============ Route parameters ============
 */

Route::get('ab', function(){
	return response('hello world', 200)->header('Content-Type', 'text/plain');;
});

/**
 * Json response
 */
Route::get('abc', function(){
	// return [1,2,3,4];
	return response()->json([
		'name'=> 'mohammad azim',
		'last_name' => 'sakhizadah'
	]);
});


/**
 * ============ named routes ============
 */

Route::get('name/profile', 'NamesController@index')->name('profile');


Route::get('/show', 'NamesController@show');


Route::resource('test', 'TestController');