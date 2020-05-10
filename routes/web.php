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
Route::get('/login','AuthController@login')->name('login');
Route::post('/postlogin','AuthController@postlogin');
Route::get('/logout','AuthController@logout');

Route::get('/home', 'HomeController@index')->name('home');

//Admin Master
Route::group(['middleware'=>['auth','checkLevel:1']],function(){
  Route::resource("users","UserController");
  Route::post('/user/{id}/edit','UserController@editProfile');
});

//Dokter
Route::group(['middleware'=>['auth','checkLevel:2']],function(){

});
//Petugas
Route::group(['middleware'=>['auth','checkLevel:3']],function(){
  Route::get('/orangtua','OrtuController@index');
  Route::post('/orangtua/tambah','OrtuController@create');
  Route::get('/pasien/{id}','PasienController@index');
  Route::post('/pasien/tambah','PasienController@create');
  Route::get('/pelayanan/{id}','PelayananController@index');
  Route::post('/pasien/pemeriksaan','PelayananController@create');
  Route::get('/exo/{id}','PelayananController@exo');
  Route::get('/registrasi/{id}','PelayananController@registrasi');
  Route::post('/pasien/registrasiulang','PelayananController@registrasiUlang');
  // menu pendaftaran -> pasien lama
  Route::get('/pasienlama','PasienController@dataPasien');
  Route::get('pasien/{id}/daftarlayanan','PelayananController@index');
  //Menu Data Pasien
  Route::get('/pasien','PasienController@semuaDatapasien');
  Route::get('/pasien/{id}/detail','PasienController@detailPasien');



});

//Apoteker
Route::group(['middleware'=>['auth','checkLevel:4']],function(){

});
Route::group(['middleware'=>['auth','checkLevel:1,2,3,4']],function(){
  Route::get('/dashboard','DashboardController@index');
});
