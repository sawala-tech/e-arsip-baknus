<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth;
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

Route::get('/', Auth::class);
Route::get('/surat-keluar/laporan', [SuratKeluarController::class, 'laporan']);
Route::resource('/surat-keluar', SuratKeluarController::class);
Route::get('/surat-keluar/detail/{id}', [SuratKeluarController::class, 'detail']);
Route::get('/export/surat-keluar', [SuratKeluarController::class, 'exportExcel']);

Route::get('/surat-masuk/laporan', [SuratMasukController::class, 'laporan']);
Route::resource('/surat-masuk', SuratMasukController::class);
Route::get('/surat-masuk/detail/{id}', [SuratMasukController::class, 'detail']);
Route::get('/export/surat-masuk', [SuratMasukController::class, 'exportExcel']);

Route::get('/dashboard',Dashboard::class);
//resource('suratmasuk', SuratMasukController::class);
