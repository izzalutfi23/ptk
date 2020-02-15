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

//Login
Route::get('/login', 'Authcontroller@index')->name('login');
Route::post('/postlogin', 'Authcontroller@postlogin');
Route::get('/logout', 'Authcontroller@logout');


Route::group(['middleware'=>'auth'], function(){
	// Dashboard
	Route::get('/', 'Home@index');
	// Data sekolah
	Route::get('/datasekolah', 'DatasekolahController@index');
	Route::post('/datasekolah', 'DatasekolahController@store');
	Route::get('/datasekolah/{npsn}', 'DatasekolahController@edit');
	Route::patch('/datasekolah', 'DatasekolahController@update');
	Route::get('/datasekolah/delete/{npsn}', 'DatasekolahController@destroy');
	Route::get('/sekolah/{status}/{jenjang}', 'DatasekolahController@show');

	// Data Pendidik
	Route::get('/datapendidik', 'DatapendidikController@index');
	Route::get('/datapendidik/tambah', 'DatapendidikController@create');
	Route::post('/datapendidik', 'DatapendidikController@store');
	Route::get('/datapendidik/{nik}', 'DatapendidikController@show');
	Route::get('/datapendidik/edit/{nik}', 'DatapendidikController@edit');
	Route::patch('/datapendidik', 'DatapendidikController@update');
	Route::get('/datapendidik/delete/{nik}', 'DatapendidikController@destroy');
});