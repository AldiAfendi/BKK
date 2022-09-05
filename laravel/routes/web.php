<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\LaporanController;


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
    return view('welcome');
});
//admin
Route::get('index', [AdminController::class, 'index']);
Route::get('user', [AdminController::class, 'user']);
Route::get('tambah-user', [AdminController::class, 'tambah']);
Route::get('edit-user', [AdminController::class, 'edit']);

Route::get('perusahaan', [AdminController::class, 'perusahaan']);
Route::get('tambah-perusahaan', [AdminController::class, 'tambahperusahaan']);
Route::post('tambah-perusahaan', [AdminController::class, 'createperusahaan']);

Route::get('lowongan', [AdminController::class, 'lowongan']);
Route::get('tambah-lowongan', [AdminController::class, 'tambahlowongan']);
Route::post('tambah-lowongan', [AdminController::class, 'createlowongan']);

Route::get('edit-lowongan', [AdminController::class, 'editlowongan']);
Route::get('alumni', [AdminController::class, 'alumni']);

Route::get('tambah-alumni', [AdminController::class, 'tambahalumni']);
Route::post('tambah-alumni', [AdminController::class, 'createalumni']);
Route::get('edit-alumni/{id}', [AdminController::class, 'editalumni']);


Route::get('laporan', [LaporanController::class, 'index']);
Route::get('data-kerja', [LaporanController::class, 'datakerja']);
Route::get('data-kuliah', [LaporanController::class, 'datakuliah']);
Route::get('data-wirausaha', [LaporanController::class, 'datawirausaha']);
Route::get('data-belumkerja', [LaporanController::class, 'databelumkerja']);

//siswa
