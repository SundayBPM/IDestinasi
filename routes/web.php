<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\EksploreController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SistemUmpanBalikController;
use App\Http\Controllers\KelolaObjekWisataController;
use App\Http\Controllers\InformasiStatistikController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\WishlistController;

Route::get('/',  [LandingPageController::class, 'index'])->name('');

Route::middleware(['auth'])->group(function() {
    
    Route::get('/promo', function () {
        return view('promo');
    });
    
    Route::get('/promo', function () {
        return view('promo');
    })->name('promo');

    Route::get('/informasi-wisata', function () {
        return view('informasi-wisata');
    });



    // ========================== Kelola Objek Wisata========================================

    Route::get('/kelola-objek-wisata', [KelolaObjekWisataController::class, 'index'])->name('kelola-objek-wisata.index');

    // START PROMO
    Route::get('/promo/{event_id}', [LandingPageController::class, 'promoDetails'])->name('promo.detail');


    // Rute untuk menampilkan formulir tambah kegiatan pendaftaran objek wisata dan menyimpan data baru
    Route::get('/kelola-objek-wisata/create', [KelolaObjekWisataController::class, 'create'])->name('kelola-objek-wisata.create');
    Route::post('/kelola-objek-wisata', [KelolaObjekWisataController::class, 'store'])->name('kelola-objek-wisata.store');

    // Rute untuk menampilkan formulir edit kegiatan informasi objek wisata dan memperbarui data
    Route::get('/kelola-objek-wisata/{id}/edit', [KelolaObjekWisataController::class, 'edit'])->name('kelola-objek-wisata.edit');
    Route::put('/kelola-objek-wisata/{id}', [KelolaObjekWisataController::class, 'update'])->name('kelola-objek-wisata.update');

    // Rute untuk menghapus data objek wisata
    Route::delete('/kelola-objek-wisata/{id}', [KelolaObjekWisataController::class, 'destroy'])->name('kelola-objek-wisata.destroy');

    // ========================== Ulasan========================================
    // Mengarahkan user ke hal yang menampilkan list destinasi yang akan diberikan feedback
    Route::get('/ulasan',[SistemUmpanBalikController::class,'index']);

    // Mengarahkan user ke hal form untuk mengisih feedback
    Route::get('/ulasan/form',[SistemUmpanBalikController::class,'create']);

    // Setelah form pada hal sebelumnya diisi selanjut sistem akan menyimpan data tersebut melalui fungsi "store" dan membawa user ke hal selanjutnya yaitu /ulasan
    Route::post('/ulasan',[SistemUmpanBalikController::class,'store']);
    // Rute eksplore wisata
    Route::get('/eksplore-objek-wisata', [EksploreController::class, 'index'])->name('eksplore-objek-wisata.index');


    // ========================== Informasi Statistik========================================

    Route::get('/informasi-statistik', [InformasiStatistikController::class,'InfoPenjualan']);
    // Route::get('/informasi-statistik', 'ChartController@getDataForChart');


});

// ========================== -------------  ========================================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// ========================== Verifikasi ========================================

Route::get('/reserved-objek-wisata', [KelolaObjekWisataController::class, 'create'])->name('kelola-objek-wisata.index');
Route::get('verification', [VerificationController::class, 'index'])->name('verification.index');
Route::post('verification/{id}/verify', [VerificationController::class, 'verify'])->name('verification.verify');
Route::post('verification/{id}/unverify', [VerificationController::class, 'unverify'])->name('verification.unverify');

// ========================== Informasi Verifikasi ========================================

// Definisikan resource routes untuk InformationController
Route::resource('tourinfo', InformationController::class);


// ========================== Wishlist ========================================

Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlists.index');
Route::get('/wishlist/create', [KelolaObjekWisataController::class, 'create'])->name('kelola-objek-wisata.create');
Route::post('/wishlist', [WishlistController::class, 'store'])->name('wishlists.store');
Route::post('/wishlist/show', [KelolaObjekWisataController::class, 'show'])->name('kelola-objek-wisata.index');

// ========================== History ========================================

Route::get('/history', [HistoryController::class, 'index'])->name('history.index');
Route::delete('/history/{id}', [HistoryController::class, 'destroy'])->name('history.destroy');
Route::post('/history/buy-again/{id}', [ObjekWisataController::class, 'buyAgain'])->name('objek-wisata.index');

// // login/logout proses
// Route::get('/login', [authController::class, 'login'])->name('login');
// Route::post('/login', [authController::class, 'cekLogin']);
// Route::get('/logout', [authController::class, 'logout']);
// // register step
Route::get('/landingPage', [authController::class, 'register1'])->name('registerStep1');
Route::post('/register/step1', [authController::class, 'processStep1'])->name('register_processStep1');
Route::get('/registerStep2', [authController::class, 'register2'])->name('registerStep2');
Route::post('/register/Step2', [authController::class, 'processStep2'])->name('register_processStep2');
Route::get('/registerStep3', [authController::class, 'register3'])->name('registerStep3');
Route::post('/register/Step3', [authController::class, 'processStep3']);