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

/*pendaftaran*/
Route::get('/pendaftaran','PendaftaranController@index')->name('pendaftaran.index');
Route::get('/pendaftaran/create','PendaftaranController@create');
Route::post('/pendaftaran/store','PendaftaranController@store')->name('pendaftaran.store');
Route::get('/pendaftaran/{id_pendaftaran}/edit','PendaftaranController@edit')->name('pendaftaran.edit');
Route::post('/pendaftaran/{id_pendaftaran}/update','PendaftaranController@update')->name('pendaftaran.update');
Route::get('/pendaftaran/destroy/{id}','PendaftaranController@destroy')->name('pendaftaran.destroy');
Route::get('/pendaftaran/{id_pendaftaran}/show','PendaftaranController@show')->name('pendaftaran.show');
