<?php

use App\Http\Controllers\AbsensiController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\LayoutController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('welcome', function () {
//    return view('welcome');
//});

//Route::get('login', [LoginController::class, 'index'])->name('Login');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::post('login/proses', 'proses');
    Route::get('login', 'index')->name('login');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
//        TODO : Route Admin
        Route::resource('dashboard', LayoutController::class);
        Route::resource('absensi', AbsensiController::class);
        Route::get('/show-qr', [AbsensiController::class, 'showQR'])->name('showQR');


    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
//        TODO : Route Guru
        Route::resource('dashboard', LayoutController::class);
        Route::resource('absensi', AbsensiController::class);

    });

    Route::group(['middleware' => ['cekUserLogin:3']], function () {
//        TODO : Route Siswa
        Route::resource('beranda', SiswaController::class);
        Route::resource('absensi', AbsensiController::class);

    });

    Route::group(['middleware' => ['cekUserLogin:4']], function () {
//        TODO : Route Tamu
        Route::resource('beranda', SiswaController::class);
        Route::resource('absensi', AbsensiController::class);

    });
});
