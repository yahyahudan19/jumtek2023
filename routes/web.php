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

// MAIN ROUTES //
Route::get('/', function () {
    return view('homepage.index');
});

// PESERTA ROUTES
Route::middleware(['auth','checkRole:Peserta,Panitia'])->group(function () {
    Route::get('/dashboard','\App\Http\Controllers\PanitiaController@index');
    Route::get('/dashboard/profile','\App\Http\Controllers\PanitiaController@profile');
});

// PANITIA ROUTES
Route::middleware(['auth','checkRole:Panitia'])->group(function () {
// DASHBOARD ROUTES //
Route::get('/dashboard/lomba','\App\Http\Controllers\PanitiaController@lomba');
Route::get('/dashboard/profile','\App\Http\Controllers\PanitiaController@profile');

//GET Unit
Route::get('/dashboard/unit','\App\Http\Controllers\PanitiaController@unit');
//TAMBAH Unit
Route::post('/unit/tambah','\App\Http\Controllers\PanitiaController@tambahUnit');
//DELETE Unit
Route::get('/unit/hapus/{id_unit}','\App\Http\Controllers\PanitiaController@hapusUnit');
//IMPORT Unit
Route::post('/unit/import','\App\Http\Controllers\PanitiaController@importUnit');


//GET Peserta
Route::get('/dashboard/peserta','\App\Http\Controllers\PanitiaController@peserta');
//DELETE Peserta
Route::get('/peserta/delete/{id_peserta}','\App\Http\Controllers\PanitiaController@hapusPeserta');
//VALIDASI Peserta
Route::get('/peserta/validasi/{id_peserta}','\App\Http\Controllers\PanitiaController@validasiPeserta');
//VALIDASI Peserta
Route::get('/peserta/unvalidasi/{id_peserta}','\App\Http\Controllers\PanitiaController@unvalidasiPeserta');
//DETAIL Peserta
Route::get('dashboard/peserta/{id}','\App\Http\Controllers\PanitiaController@detailPeserta');
//UPDATE Peserta
Route::post('/peserta/update','\App\Http\Controllers\PanitiaController@updatePeserta');

});



// AUTH ROUTES //
Route::get('/login','\App\Http\Controllers\AuthController@index')->name('login');
Route::get('/logout','\App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('/auth','\App\Http\Controllers\AuthController@login');
Route::get('/register','\App\Http\Controllers\AuthController@register');
Route::post('/doregister','\App\Http\Controllers\AuthController@doRegister');



