<?php
use App\User;
use App\Http\Resources\User as UserResource;
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
// Api resources 

Route::get('/json', function () {
	$user = User::find(1);
    return new UserResource($user);
});

// localization 

Route::get('/', function () {
	App::setlocale('en');
    return view('welcome');
});

// list of memo app routes

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

Route::post('uploadfile', 'HomeController@uploadfile');


// design blade for tailwind 
Route::get('design', function(){
	return view('/design');
});

// tailwindcss

Route::get('tailwindcss', 'HomeController@tailwindcsspage');


// Query builder

Route::get('Query', 'HomeController@QueryBuilder');


// Pdf generate

Route::get('/pdf', 'HomeController@downloadPDF');

// excel exporting and importing

Route::get('export', 'DemoController@export')->name('export');
Route::get('importExportView', 'DemoController@importExportView');
Route::post('import', 'DemoController@import')->name('import');