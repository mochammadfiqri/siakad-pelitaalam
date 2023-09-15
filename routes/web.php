<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GTKController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\KSController;
use App\Http\Controllers\MapelController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\TAController;

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
    return view('pages.landingPages');
});

Route::middleware('only_guest')->group(function() {
    Route::get('login', [AuthController::class, 'login'])->name('login');

    Route::get('login/manajemen', [AuthController::class, 'loginManajemen'])->name('login.manajemen');
    Route::post('login/manajemen', [AuthController::class, 'authenticate']);

    Route::get('login/siswa', [AuthController::class, 'loginsiswa'])->name('login.siswa');
    Route::post('login/siswa', [AuthController::class, 'authenticate']);

    Route::get('login/gtk', [AuthController::class, 'logingtk'])->name('login.gtk');
    Route::post('login/gtk', [AuthController::class, 'authenticate']);
});

Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::middleware('only_admin')->group(function() {
        Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard.admin');
        
        Route::get('/gtk', [GTKController::class, 'index'])->name('data.gtk');

        Route::get('/jurusan', [JurusanController::class, 'index'])->name('jurusan');

        Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa');

        Route::get('/tahun-akademik', [TAController::class, 'index'])->name('TahunAkademik');
        Route::get('/tahun-akademik/mapel', [TAController::class, 'indexMapel'])->name('mapel');
        Route::get('/tahun-akademik/rombel', [TAController::class, 'indexRombel'])->name('rombel');

        Route::get('/kepala-sekolah', [KSController::class, 'index'])->name('KS');
        
    });
    Route::middleware('only_student')->group(function() {
        Route::get('/student/dashboard', [SiswaController::class, 'dashboardSiswa'])->name('dashboard.siswa');
    });
    Route::middleware('only_teacher')->group(function() {
        Route::get('/teacher/dashboard', [GTKController::class, 'dashboardGTK'])->name('dashboard.guru');
    });
});