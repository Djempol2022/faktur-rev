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

Route::get('/', function () {
    return view('dealer.dashboard.index');
})->name('dashboard');
Route::get('/data-faktur', function () {
    return view('dealer.data-faktur.index');
})->name('data-faktur');
Route::get('/pengaturan', function () {
    return view('dealer.pengaturan.index');
})->name('pengaturan');
Route::get('/logout', function () {
    return view('dealer.dashboard.index');
})->name('logout');


Route::get('/login', function () {
    return view('auth.login');
})->name('login');
Route::get('/register', function () {
    return view('auth.register');
})->name('register');
