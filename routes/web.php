<?php

use Illuminate\Support\Facades\Route;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/bts', 'HomeController@index')->name('home');

Route::resource("users","UserController");

Route::get('/orangtua','OrtuController@index');
Route::post('/orangtua/tambah','OrtuController@create');
Route::get('/pasien/{id}','PasienController@index');
Route::post('/pasien/tambah','PasienController@create');
Route::get('/pelayanan/{id}','PelayananController@index');
Route::post('/pasien/pemeriksaan','PelayananController@create');
Route::get('/exo/{id}','PelayananController@exo');

Route::get('/registrasi/{id}','PelayananController@registrasi');
Route::post('/pasien/registrasiulang','PelayananController@registrasiUlang');

Route::get('/pasienLama','PasienController@dataPasien');
