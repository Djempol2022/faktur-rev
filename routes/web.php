<?php

use App\Http\Controllers\AuthController;
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

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.store');
    Route::get('/register', [AuthController::class, 'registration'])->name('register');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');
});

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('dealer.dashboard.index');
    })->name('dashboard');
    Route::get('/data-faktur', function () {
        return view('dealer.data-faktur.index');
    })->name('data-faktur');
    Route::get('/pengaturan', function () {
        return view('dealer.pengaturan.index');
    })->name('pengaturan');

    // Log Out
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
