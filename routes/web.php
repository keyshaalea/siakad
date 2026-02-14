<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\RuangController;
use App\Http\Controllers\GolonganController;
use App\Http\Controllers\JadwalAkademikController;
use App\Http\Controllers\PengampuController;
use App\Http\Controllers\KrsController;
use App\Http\Controllers\PresensiAkademikController;


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
Route::get('/mahasiswa',[MahasiswaController::class, 'index'])->name('mahasiswa');
Route::resource('matakuliah', MataKuliahController::class);
Route::resource('ruang', RuangController::class);
Route::resource('golongan', GolonganController::class);
Route::resource('jadwal', JadwalAkademikController::class);
Route::resource('pengampu', PengampuController::class);
Route::resource('krs', KrsController::class);
Route::resource('presensi', PresensiAkademikController::class);