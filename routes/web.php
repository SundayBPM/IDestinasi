<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SistemUmpanBalikController;
use App\Http\Controllers\KelolaObjekWisataController;
use App\Http\Controllers\InformasiStatistikController;

Route::get('/',  [LandingPageController::class, 'index'])->name('');
Route::get('/clone_login', function () {
    return view('auth.clone_login');
});

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


    // ========================== Informasi Statistik========================================

    Route::get('/informasi-statistik', [InformasiStatistikController::class,'InfoPenjualan']);
    // Route::get('/informasi-statistik', 'ChartController@getDataForChart');


});

// ========================== -------------  ========================================

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');