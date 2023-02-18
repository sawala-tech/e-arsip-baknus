<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\SuratMasuk;
use App\Http\Controllers\SuratKeluar;

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

Route::get('/', Auth::class);
Route::get('/dashboard', Dashboard::class);
Route::get('/surat-masuk', SuratMasuk::class);
Route::get('/surat-keluar', SuratKeluar::class);
