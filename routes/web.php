<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\FakturController;
use App\Http\Controllers\PenggunaController;

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

Route::middleware('guest')->group(function () {
    Route::get('/', [AuthController::class, 'index'])->name('login');
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'registration'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware(['auth'])->group(function () {
    // DEALER
    Route::prefix('dealer')->name('dealer.')->middleware(['isDealer'])->group(function () {
        Route::get('/dataFakturDealer',     [FakturController::class, 'data_faktur_dealer'])->name('DataFakturDealer');
        Route::post('/tambah-data-faktur',    [FakturController::class, 'tambah_data_faktur'])->name('TambahFaktur');
        Route::get('/',                       [FakturController::class, 'index_dealer'])->name('Dashboard');

    });

    Route::any('/faktur',               [FakturController::class, 'data'])->name('Faktur');
    Route::get('/edit-profil',          [PenggunaController::class, 'edit_profil'])->name('EditProfil');
    Route::post('/updated-profil',      [PenggunaController::class, 'profil_update'])->name('UpdatedProfil');
    Route::get('/edit-password',        [PenggunaController::class, 'edit_password'])->name('EditPassword');
    Route::post('/updated-password',    [PenggunaController::class, 'password_update'])->name('UpdatedPassword');
    Route::get('/pengaturan',           [PenggunaController::class, 'pengaturan'])->name('Pengaturan');
    Route::post('/data-perbulan',       [BerandaController::class, 'total_perbulan'])->name('DataPerbulan');


    // BIRO
    Route::prefix('biro')->name('biro.')->middleware(['isBiro'])->group(function () {
        Route::get('/dataFaktur',          [FakturController::class, 'data_faktur'])->name('DataFaktur');
        Route::get('/',                     [FakturController::class, 'index'])->name('Dashboard');
        Route::any('/faktur',               [FakturController::class, 'data'])->name('Faktur');
        Route::patch('/kirim-ke-dealer',    [FakturController::class, 'kirim_ke_dealer'])->name('KirimKeDealer');
        Route::patch('/verifikasi-samsat',  [FakturController::class, 'verifikasi_samsat'])->name('VerifikasiSamsat');
        
        Route::get('/pengguna',             [PenggunaController::class, 'data_pengguna'])->name('DataPengguna');
        Route::post('/tambah-pengguna',     [PenggunaController::class, 'tambah_pengguna'])->name('TambahPengguna');
        Route::post('/edit-pengguna/{id}',  [PenggunaController::class, 'edit_pengguna'])->name('EditPengguna');
        Route::get('/hapus-pengguna/{id}',  [PenggunaController::class, 'hapus_pengguna']);
        Route::get('/kelola-kabupaten',     [BerandaController::class, 'data_kabupaten'])->name('KelolaKabupaten');
        Route::post('/aktif-kabupaten',     [BerandaController::class, 'aktifkan_kabupaten'])->name('AktifkanKabupaten');
        Route::get('/hapus-kabupaten/{id}', [BerandaController::class, 'nonaktifkan_kabupaten']);
    });

    // Log Out
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
