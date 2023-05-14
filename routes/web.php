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
Route::middleware(['auth','checkRole:Peserta,Panitia,Pembina'])->group(function () {
    Route::get('/dashboard','\App\Http\Controllers\PanitiaController@index');
    Route::get('/dashboard/profile','\App\Http\Controllers\PanitiaController@profile');
    //UPDATE Peserta
    Route::post('/profile/update','\App\Http\Controllers\PesertaController@updatePeserta');
    //GET Kegiatan Page
    Route::get('/dashboard/kegiatan/peserta','\App\Http\Controllers\PesertaController@kegiatan');
    //POST Kegiatan Peserta
    Route::post('/kegiatan/peserta/tambah','\App\Http\Controllers\PesertaController@tambahKegiatan');

});

// PEMBINA ROUTES
Route::middleware(['auth','checkRole:Pembina'])->group(function () {

    //GET Peserta By Unit
    Route::get('/dashboard/pembina/peserta','\App\Http\Controllers\PembinaController@peserta');
});

// PANITIA ROUTES
Route::middleware(['auth','checkRole:Panitia'])->group(function () {
// DASHBOARD ROUTES //
Route::get('/dashboard/lomba','\App\Http\Controllers\PanitiaController@lomba');

//GET Unit
Route::get('/dashboard/unit','\App\Http\Controllers\PanitiaController@unit');
//TAMBAH Unit
Route::post('/unit/tambah','\App\Http\Controllers\PanitiaController@tambahUnit');
//DELETE Unit
Route::get('/unit/hapus/{id_unit}','\App\Http\Controllers\PanitiaController@hapusUnit');
//IMPORT Unit
Route::post('/unit/import','\App\Http\Controllers\PanitiaController@importUnit');
//DETAIL Unit
Route::get('/dashboard/unit/{id_unit}','\App\Http\Controllers\PanitiaController@detailUnit');


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


//GET Kegiatan
Route::get('/dashboard/kegiatan','\App\Http\Controllers\PanitiaController@kegiatan');
Route::post('/kegiatan/tambah','\App\Http\Controllers\PanitiaController@tambahKegiatan');
Route::get('/kegiatan/aktif/{id}','\App\Http\Controllers\PanitiaController@aktifKegiatan');
Route::get('/kegiatan/nonaktif/{id}','\App\Http\Controllers\PanitiaController@nonaktifKegiatan');

});



// AUTH ROUTES //
Route::get('/login','\App\Http\Controllers\AuthController@index')->name('login');
Route::get('/logout','\App\Http\Controllers\AuthController@logout')->name('logout');
Route::post('/auth','\App\Http\Controllers\AuthController@login');
Route::get('/register','\App\Http\Controllers\AuthController@register');
Route::post('/doregister','\App\Http\Controllers\AuthController@doRegister');


//GET Unit by StatusUnis
Route::get('/unit/getUnitByStatusUnits/{status_units}','\App\Http\Controllers\AuthController@getUnitsByStatus')->name('getUnitsByStatus');

Route::get('/qrgenerator','\App\Http\Controllers\AuthController@qrgenerator');


