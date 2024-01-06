<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\ProdiController;
use App\Http\Controllers\MataKuliahController;

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

Route::prefix('mahasiswa')->group(function () {
    Route::get('/', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/create', [MahasiswaController::class, 'create'])->name('mahasiswa.create');
    Route::post('/store', [MahasiswaController::class, 'store'])->name('mahasiswa.store');
    Route::get('/edit/{id}', [MahasiswaController::class, 'edit'])->name('mahasiswa.edit');
    Route::put('/mahasiswa/{id}', [MahasiswaController::class, 'update'])->name('mahasiswa.update');
    Route::get('/mahasiswa/{id}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');
    Route::delete('/mahasiswa/{id}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.destroy');
});

Route::prefix('prodi')->group(function () {
    Route::get('/', [ProdiController::class, 'index'])->name('prodi.index');
    Route::get('/create', [ProdiController::class, 'create'])->name('prodi.create');
    Route::post('/store', [ProdiController::class, 'store'])->name('prodi.store');
    Route::get('/edit/{id}', [ProdiController::class, 'edit'])->name('prodi.edit');
    Route::put('/prodi/{id}', [ProdiController::class, 'update'])->name('prodi.update');
    Route::get('/prodi/{id}', [ProdiController::class, 'show'])->name('prodi.show');
    Route::delete('/prodi/{id}', [ProdiController::class, 'destroy'])->name('prodi.destroy');
});


Route::prefix('dosen')->group(function () {
    Route::get('/', [DosenController::class, 'index'])->name('dosen.index');
    Route::get('/create', [DosenController::class, 'create'])->name('dosen.create');
    Route::post('/store', [DosenController::class, 'store'])->name('dosen.store');
    Route::get('/edit/{id}', [DosenController::class, 'edit'])->name('dosen.edit');
    Route::put('/dosen/{id}', [DosenController::class, 'update'])->name('dosen.update');
    Route::get('/dosen/{id}', [DosenController::class, 'show'])->name('dosen.show');
    Route::delete('/dosen/{id}', [DosenController::class, 'destroy'])->name('dosen.destroy');
});

Route::prefix('matakuliah')->group(function () {
    Route::get('/', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/create', [MataKuliahController::class, 'create'])->name('matakuliah.create');
    Route::post('/store', [MataKuliahController::class, 'store'])->name('matakuliah.store');
    Route::get('/edit/{id}', [MataKuliahController::class, 'edit'])->name('matakuliah.edit');
    Route::put('/matakuliah/{id}', [MataKuliahController::class, 'update'])->name('matakuliah.update');
    Route::get('/matakuliah/{id}', [MataKuliahController::class, 'show'])->name('matakuliah.show');
    Route::delete('/matakuliah/{id}', [MataKuliahController::class, 'destroy'])->name('matakuliah.destroy');
});
