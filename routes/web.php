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

Route::resource('mahasiswa', 'MahasiswaController');

Route::get('/matkul', 'MatkulController@index')->name('matkul.index');
Route::get('/matkul/create', 'MatkulController@create')->name('matkul.create');
Route::post('matkul/store', 'MatkulController@store')->name('matkul.store');
