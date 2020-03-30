<?php

use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;
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
// Route::get('/', function () {
//    $user = auth()->user();
//    $role = Role::find(2);
//     //dd($user);
//   // auth()->user()->assignRole('admin');
//  //$role->givePermissionTo('Periksa','Riwayat Periksa');
//   // $user = auth()->user();
//   //  $role = Role::find(1);
//   // // // $role->givePermissionTo('Kelola Pengguna','Laporan');
//     dd($user->can(['Periksa','Riwayat Periksa']));
// });
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource("users","UserController");
