<?php

use App\Http\Controllers\JnsKendaraanController;
use App\Http\Controllers\Kendaraan;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\Pemilik;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dasboard');
})->name('home');

//Route jnskendaraan
Route::get('/jnskendaraan', [JnsKendaraanController::class, 'index'])->name('jnsKendaraan.index');
Route::get('/jnskendaraan/add', [JnsKendaraanController::class, 'create'])->name('jnsKendaraan.create');
Route::post('/jnskendaraan/add', [JnsKendaraanController::class, 'store'])->name('jnsKendaraan.store');
Route::get('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'edit'])->name('jnsKendaraan.edit');
Route::post('/jnskendaraan/edit/{id}', [JnsKendaraanController::class, 'update'])->name('jnsKendaraan.update');
Route::get('/jnskendaraan/delete/{id}', [JnsKendaraanController::class, 'destroy'])->name('jnsKendaraan.delete');

//route pemilik
Route::get('/Pemilik', [Pemilik::class, 'index'])->name('Pemilik.index');
Route::get('/Pemilik/add', [Pemilik::class, 'create'])->name('Pemilik.create');
Route::post('/Pemilik/add', [Pemilik::class, 'store'])->name('Pemilik.store');
Route::get('/Pemilik/edit/{id_pemilik}', [Pemilik::class, 'edit'])->name('Pemilik.edit');
Route::post('/Pemilik/update/{id_pemilik}', [Pemilik::class, 'update'])->name('Pemilik.update');
Route::get('/Pemilik/delete/{id_pemilik}', [Pemilik::class, 'destroy'])->name('Pemilik.delete');

//route kendaraan
Route::get('/Kendaraan', [KendaraanController::class, 'index'])->name('Kendaraan.index');
Route::get('/Kendaraan/add', [KendaraanController::class, 'create'])->name('Kendaraan.create');
Route::post('/Kendaraan/add', [KendaraanController::class, 'store'])->name('Kendaraan.store');
Route::get('/Kendaraan/edit/{id_kendaraan}', [KendaraanController::class, 'edit'])->name('Kendaraan.edit');
Route::post('/Kendaraan/update/{id_kendaraan}', [KendaraanController::class, 'update'])->name('Kendaraan.update');
Route::get('/Kendaraan/delete/{id_kendaraan}', [KendaraanController::class, 'destroy'])->name('Kendaraan.delete');

//mekanik 
route::get('/mekanik', [mekanikcontroller::class, 'index'])->name('mekanik.index');
route::get('/mekanik/add', [mekanikcontroller::class, 'create'])->name('mekanik.create');
route::post('/mekanik/add', [mekanikcontroller::class, 'store'])->name('mekanik.store');
route::get('/mekanik/edit/{id}', [mekanikcontroller::class, 'edit'])->name('mekanik.edit');
route::post('/mekanik/edit/{id}', [mekanikcontroller::class, 'update'])->name('mekanik.update');
route::get('/mekanik/delete/{id}', [mekanikcontroller::class, 'destroy'])->name('mekanik.delete');