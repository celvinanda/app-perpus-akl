<?php

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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('login', [LoginController::class, 'index'])->name('Login');

Route::get('/', [LayoutController::class, 'index'])->name('layout');

Route::controller(LoginController::class)->group(function () {
    Route::get('login', 'index')->name('Login');
    Route::post('login/proses', 'proses');
    Route::get('logout', 'logout');
});

Route::group(['middleware' => ['auth']], function () {
    Route::group(['middleware' => ['cekUserLogin:1']], function () {
        Route::resource('dashboard', AdminController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:2']], function () {
        Route::resource('home', GuruController::class);
    });

    Route::group(['middleware' => ['cekUserLogin:3']], function () {
        Route::resource('beranda', SiswaController::class);
    });
});
