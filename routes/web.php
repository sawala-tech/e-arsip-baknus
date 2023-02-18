<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\SuratMasukController;
use App\Http\Controllers\Dashboard;

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

Route::get('/', Authentication::class)->name('login')->middleware('guest');
Route::post('/login', [Authentication::class, 'login'])->middleware('guest');
Route::post('/logout', [Authentication::class, 'logout'])->middleware('auth');
Route::get('/surat-keluar/laporan', [SuratKeluarController::class, 'laporan'])->middleware('auth');
Route::resource('/surat-keluar', SuratKeluarController::class)->middleware('auth');
Route::get('/surat-keluar/detail/{id}', [SuratKeluarController::class, 'detail'])->middleware('auth');
Route::get('/export/surat-keluar', [SuratKeluarController::class, 'exportExcel'])->middleware('auth');

Route::get('/surat-masuk/laporan', [SuratMasukController::class, 'laporan'])->middleware('auth');
Route::resource('/surat-masuk', SuratMasukController::class)->middleware('auth');
Route::get('/surat-masuk/detail/{id}', [SuratMasukController::class, 'detail'])->middleware('auth');
Route::get('/export/surat-masuk', [SuratMasukController::class, 'exportExcel'])->middleware('auth');

Route::get('/dashboard',Dashboard::class)->middleware('auth');
