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