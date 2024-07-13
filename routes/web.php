<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\Beranda2Controller;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\ProfilDinasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PmksController;
use App\Http\Controllers\InfoPengaduanController;
use App\Http\Controllers\LayananPengaduanController;
use App\Http\Controllers\StrategiKebijakanController;
use App\Http\Controllers\TupoksiTujuanController;
use App\Http\Controllers\VisiMisiController;
use App\Models\Infopengaduan;
use Illuminate\Auth\Events\Login;

// Route::get('/beranda2', function () {
//     return view('beranda2');
// });

// Beranda

Route::group(['prefix' => 'Admin', 'middleware' => ['auth'], 'as' => 'Admin.'], function () {
    Route::get('/beranda', [BerandaController::class, 'index'])->name('beranda.index');
    Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai.index');
    Route::get('/pegawai/create', [PegawaiController::class, 'create'])->name('pegawai.create');
    Route::post('/pegawai/create', [PegawaiController::class, 'store'])->name('pegawai.create');
    Route::get('/pegawai/edit/{id}', [PegawaiController::class, 'edit'])->name('pegawai.edit');
    Route::post('/pegawai/update/{id}', [PegawaiController::class, 'update'])->name('pegawai.update');
    Route::post('/pegawai/delete/{id}', [PegawaiController::class, 'destroy'])->name('pegawai.delete');

    // PMKS

    Route::get('/pmks', [PmksController::class, 'index'])->name('pmks.index');
    Route::get('/pmks/create', [PmksController::class, 'create'])->name('pmks.create');
    Route::post('/pmks/create', [PmksController::class, 'store'])->name('pmks.create');
    Route::get('/pmks/edit/{id}', [PmksController::class, 'edit'])->name('pmks.edit');
    Route::post('/pmks/update/{id}', [PmksController::class, 'update'])->name('pmks.update');
    Route::post('/pmks/delete/{id}', [PmksController::class, 'destroy'])->name('pmks.delete');

    // INFO PENGADUAN

    Route::get('/infopengaduan', [InfoPengaduanController::class, 'index'])->name('infopengaduan.index');
    Route::post('/infopengaduan/delete/{id}', [InfoPengaduanController::class, 'destroy'])->name('infopengaduan.delete');
});

// Pengguna

Route::group(['prefix' => 'Pengguna', 'middleware' => ['auth'], 'as' => 'Pengguna.'], function () {
    Route::get('/beranda2', [Beranda2Controller::class, 'index'])->name('beranda2.index');
    Route::get('/profil-dinas', [ProfilDinasController::class, 'index'])->name('profil-dinas.index');
    Route::get('/visi-misi', [VisiMisiController::class, 'index'])->name('visi-misi.index');
    Route::get('/tupoksi-tujuan', [TupoksiTujuanController::class, 'index'])->name('tupoksi-tujuan.index');
    Route::get('/strategi-kebijakan', [StrategiKebijakanController::class, 'index'])->name('strategi-kebijakan.index');

    // Berita
    Route::get('/berita', [BeritaController::class, 'index'])->name('berita.index');
    Route::get('/berita/berita1', [BeritaController::class, 'berita1'])->name('berita.berita1');
    Route::get('/berita/berita2', [BeritaController::class, 'berita2'])->name('berita.berita2');
    Route::get('/berita/berita3', [BeritaController::class, 'berita3'])->name('berita.berita3');
    Route::get('/berita/berita4', [BeritaController::class, 'berita4'])->name('berita.berita4');
    Route::get('/berita/berita5', [BeritaController::class, 'berita5'])->name('berita.berita5');
    Route::get('/berita/berita6', [BeritaController::class, 'berita6'])->name('berita.berita6');

    // Aju Pengaduan
    Route::get('/layanan-pengaduan', [LayananPengaduanController::class, 'index'])->name('layanan-pengaduan.index');
    Route::post('/layanan-pengaduan', [LayananPengaduanController::class, 'store'])->name('layanan-pengaduan.store');
});

// Route::group(['prefix' => 'Pengguna', 'middleware' => ['auth'], 'as' => 'Pengguna.'], function () {
//     Route::get('/beranda2', [Beranda2Controller::class, 'index'])->name('beranda2.index');
// });

// Login & Logout

Route::get('/login', [LoginController::class, 'index'])->name('login.index');
Route::post('/login-proses', [LoginController::class, 'login_proses'])->name('login-proses');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
