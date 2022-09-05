<?php
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DataController;


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

Auth::routes(['login'=>false,'logout'=>false]);
Route::get('/', function () {
    return view('welcome');
});
//user
Route::get('/index', [SiswaController::class, 'index']);
Route::get('/listing', [SiswaController::class, 'listing']);
Route::get('/blog', [SiswaController::class, 'blog']);
Route::get('/bekerja', [SiswaController::class, 'bekerja']);
Route::get('/kuliah', [SiswaController::class, 'kuliah']);
Route::get('/wirausaha', [SiswaController::class, 'wirausaha']);
Route::get('/profile', [SiswaController::class, 'profile']);


Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'masuk'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

//admin
Route::get('/admin', [AdminController::class, 'index']);

Route::get('user', [DataController::class, 'index'])->name('user');
    Route::get('tambah-user', [DataController::class, 'tambah']);
    Route::post('tambah-user', [DataController::class, 'createuser']);
    Route::get('edit-user', [DataController::class, 'edit']);

    Route::get('perusahaan', [DataController::class, 'perusahaan']);
    Route::get('tambah-perusahaan', [DataController::class, 'tambahperusahaan']);
    Route::post('tambah-perusahaan', [DataController::class, 'createperusahaan']);

    Route::get('lowongan', [DataController::class, 'lowongan']);
    Route::get('tambah-lowongan', [DataController::class, 'tambahlowongan']);
    Route::post('tambah-lowongan', [DataController::class, 'createlowongan']);

    Route::get('edit-lowongan', [DataController::class, 'editlowongan']);
    Route::get('alumni', [DataController::class, 'alumni']);

    Route::get('tambah-alumni', [DataController::class, 'tambahalumni']);
    Route::post('tambah-alumni', [DataController::class, 'createalumni']);
    Route::get('edit-alumni/{id}', [DataController::class, 'editalumni']);


    Route::get('laporan', [LaporanController::class, 'index']);
    Route::get('data-kerja', [LaporanController::class, 'datakerja']);
    Route::get('data-kuliah', [LaporanController::class, 'datakuliah']);
    Route::get('data-wirausaha', [LaporanController::class, 'datawirausaha']);
    Route::get('data-belumkerja', [LaporanController::class, 'databelumkerja']);

    // Route::get('/index', [SiswaController::class, 'index']);




