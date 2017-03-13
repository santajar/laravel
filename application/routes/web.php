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

Route::get('/', function(){
  return view('auth.login');
});

Route::get('/home', 'HomeController@home')->name('home');
Route::get('daftar-bmt', 'BMTController@daftarBMT')->name('daftar.bmt');
Route::get('daftar-bmt/tambah', 'BMTController@daftarBMTAdd')->name('daftar.bmtadd');
Route::post('daftar-bmt/tambah', 'BMTController@daftarBMTStore')->name('daftar.bmtpost');
Route::get('daftar-bmt/ubah/{NIK_BMT}', 'BMTController@daftarBMTUbah')->name('daftar.bmtubah');
Route::post('daftar-bmt/ubah', 'BMTController@daftarBMTEdit')->name('daftar.bmtedit');



// Auth::routes();
//Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');
Route::post('login', 'Auth\LoginController@loginProcess')->name('login.proses');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
