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
Route::get('daftar-bmt', 'HomeController@daftarBMT')->name('daftar.bmt');
Route::get('daftar-bmt/tambah', 'HomeController@daftarBMTAdd')->name('daftar.bmtadd');



// Auth::routes();
//Route::get('/', 'Auth\LoginController@showLoginForm')->name('index');
Route::post('login', 'Auth\LoginController@loginProcess')->name('login.proses');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
