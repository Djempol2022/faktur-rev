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

Route::middleware(['auth'])->group(function () {
    // DEALER
    Route::prefix('dealer')->name('dealer.')->middleware(['isDealer'])->group(function () {
        Route::get('/', function () {
            return view('dealer.dashboard.index');
        })->name('dashboard');
        Route::get('/data-faktur', function () {
            return view('dealer.data-faktur.index');
        })->name('data-faktur');
        Route::prefix('pengaturan')->name('pengaturan.')->group(function () {
            Route::get('/', function () {
                return view('dealer.pengaturan.index');
            })->name('index');
            Route::get('/profil', function () {
                return view('dealer.pengaturan.profil.index');
            })->name('profil');
            Route::get('/password', function () {
                return view('dealer.pengaturan.password.index');
            })->name('password');
        });
    });

    // BIRO
    Route::prefix('biro')->name('biro.')->middleware(['isBiro'])->group(function () {
        Route::get('/', function () {
            return view('biro.dashboard.index');
        })->name('dashboard');
        Route::get('/data-faktur', function () {
            return view('biro.data-faktur.index');
        })->name('data-faktur');
        Route::get('/pengaturan', function () {
            return view('biro.pengaturan.index');
        })->name('pengaturan');
    });

    // Log Out
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
