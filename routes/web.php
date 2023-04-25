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

// AUTH ROUTES //
Route::get('/login','\App\Http\Controllers\AuthController@index');
Route::get('/register','\App\Http\Controllers\AuthController@register');

// DASHBOARD ROUTES //
Route::get('/dashboard','\App\Http\Controllers\PanitiaController@index');
Route::get('/dashboard/peserta','\App\Http\Controllers\PanitiaController@peserta');
Route::get('/dashboard/lomba','\App\Http\Controllers\PanitiaController@lomba');
Route::get('/dashboard/profile','\App\Http\Controllers\PanitiaController@profile');


