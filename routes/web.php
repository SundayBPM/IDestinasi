<?php

use App\Models\User;
use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\userController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelolaObjekWisataController;
use App\Http\Controllers\SistemUmpanBalikController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// ====================Landing Page========================================
Route::get('/landingPage', function () {
    return view('landingPage');
});


Route::get('/promo', function () {
    return view('promo');
});

Route::get('/landingPage', function () {
    return view('landingPage');
})->name('landingPage');

Route::get('/promo', function () {
    return view('promo');
})->name('promo');

// ========================== Landing Page========================================

Route::get('/kelola-objek-wisata', [KelolaObjekWisataController::class, 'index'])->name('kelola-objek-wisata.index');

// Rute untuk menampilkan formulir tambah kegiatan pendaftaran objek wisata dan menyimpan data baru
Route::get('/kelola-objek-wisata/create', [KelolaObjekWisataController::class, 'create'])->name('kelola-objek-wisata.create');
Route::post('/kelola-objek-wisata', [KelolaObjekWisataController::class, 'store'])->name('kelola-objek-wisata.store');

// Rute untuk menampilkan formulir edit kegiatan informasi objek wisata dan memperbarui data
Route::get('/kelola-objek-wisata/{id}/edit', [KelolaObjekWisataController::class, 'edit'])->name('kelola-objek-wisata.edit');
Route::put('/kelola-objek-wisata/{id}', [KelolaObjekWisataController::class, 'update'])->name('kelola-objek-wisata.update');

// Rute untuk menghapus data objek wisata
Route::delete('/kelola-objek-wisata/{id}', [KelolaObjekWisataController::class, 'destroy'])->name('kelola-objek-wisata.destroy');


// // login/logout proses
// Route::get('/login', [authController::class, 'login']);
// Route::post('/login', [authController::class, 'cekLogin']);
// Route::get('/logout', [authController::class, 'logout']);
// // register step
// Route::get('/register', [authController::class, 'register1']);
// Route::post('/register', [authController::class, 'processStep1']);
// Route::get('/register2', [authController::class, 'register2']);
// Route::post('/register2', [authController::class, 'processStep2']);
// Route::get('/register3', [authController::class, 'register3']);
// Route::post('/register3', [authController::class, 'processStep3']);


// Mengarahkan user ke hal yang menampilkan list destinasi yang akan diberikan feedback
Route::get('/ulasan',[SistemUmpanBalikController::class,'index']);

// Mengarahkan user ke hal form untuk mengisih feedback
Route::get('/ulasan/form',[SistemUmpanBalikController::class,'create']);

// Setelah form pada hal sebelumnya diisi selanjut sistem akan menyimpan data tersebut melalui fungsi "store" dan membawa user ke hal selanjutnya yaitu /ulasan
Route::post('/ulasan',[SistemUmpanBalikController::class,'store']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
