<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/Dashboard', function () {
    return view('dashboard');
})-> name('dashboard');


//login
Route::get('Login',[AuthController::class, 'login'])->name('login');
Route::post('Login',[AuthController::class, 'loginProses'])->name('loginProses');
//dosen
Route::get('dosen',[UserController::class, 'index'])->name('dosen');
//mahasiswa
Route::get('mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');
