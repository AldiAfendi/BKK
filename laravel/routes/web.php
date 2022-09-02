<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
Route::get('index', [AdminController::class, 'index']);
Route::get('user', [AdminController::class, 'user']);
Route::get('tambah-user', [AdminController::class, 'tambah']);
Route::get('edit-user', [AdminController::class, 'edit']);
Route::get('perusahaan', [AdminController::class, 'perusahaan']);
Route::get('tambah-perusahaan', [AdminController::class, 'tambahperusahaan']);
Route::get('lowongan', [AdminController::class, 'lowongan']);
Route::get('tambah-lowongan', [AdminController::class, 'tambahlowongan']);
Route::get('edit-lowongan', [AdminController::class, 'editlowongan']);
Route::get('alumni', [AdminController::class, 'alumni']);
