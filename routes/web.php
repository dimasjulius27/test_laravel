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

Route::get('home', function () {
    return view('home');
    return "ini adalah route Home";
});

Route::get('pegawai', 'pegawaiController@index');

Route::get('biodata/{nama}', 'biodataController@index');

Route::get('form', 'biodataController@form');
Route::post('form/proses', 'biodataController@prosesnya');

Route::get('blog', 'blogController@index');
Route::get('blog/tentang', 'blogController@tentang');
Route::get('blog/kontak', 'blogController@contact');

