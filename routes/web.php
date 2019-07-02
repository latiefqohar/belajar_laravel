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
//localhost/halo
Route::get('halo', function () {
    return "hallo selamat datang";
});

//localhost/blog
Route::get('blog', function () {
    return view('blog');
});

//localhost/dosen
Route::get('dosen', 'DosenController@index');

//localhost/pegawai
Route::get('/pegawai/{nama}', 'PegawaiController@index');

//tutorial 5
Route::get('/formulir','PegawaiController@formulir');
Route::post('/formulir/proses','PegawaiController@proses');

// route blog
Route::get('/blog', 'BlogController@home');
Route::get('/blog/tentang', 'BlogController@tentang');
Route::get('/blog/kontak', 'BlogController@kontak');

