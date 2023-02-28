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

Route::get('welcome', function () {
    return view('welcome');
});
Route::get('/scan-qr', function () {
    return view('layout.absensi.scan_qr');
});
//Route::post('/scanQR', [AbsensiController::class, 'scanQR'])->name('scanQR');
//Route::get('/scanQR', 'AbsensiController@scanQR')->name('scanQR');
//Route::get('/scanQR', 'AbsensiController@scanQR')->name('scanQR');
//Route::post('/scanQR', 'AbsensiController@addPengunjung')->name('addPengunjung');




//Route::get('auth', [LoginController::class, 'index'])->name('Login');
Route::get('scanQR', [AbsensiController::class, 'scanQR'])->name('scanQR');
Route::post('scanQR', [AbsensiController::class, 'addPengunjung'])->name('addPengunjung');

Route::get('/', [LayoutController::class, 'index'])->middleware('auth');
Route::get('/home', [LayoutController::class, 'index'])->middleware('auth');

Route::controller(LoginController::class)->group(function () {
    Route::post('auth/proses', 'proses');
    Route::get('login', 'index')->name('auth');
    Route::get('daftar', 'register');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
//        TODO : Route Admin
        Route::resource('dashboard', LayoutController::class);
        Route::get('/data-user', [LayoutController::class,'allUsers']);

        Route::resource('absensi', AbsensiController::class);
        Route::get('/show-qr', [AbsensiController::class, 'showQR'])->name('screen_qr');
        Route::get('/absen', [AbsensiController::class, 'generate'])->name('generate');

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
