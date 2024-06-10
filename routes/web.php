<?php

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
use App\Http\Controllers\adminController;
use App\Http\Controllers\HistoryController;
use App\Http\Controllers\EksploreController;
use App\Http\Controllers\WishlistController;
use App\Http\Controllers\EditProfilController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\SistemUmpanBalikController;
use App\Http\Controllers\KelolaObjekWisataController;
use App\Http\Controllers\InformasiStatistikController;

Auth::routes();
// menuju ke hal ulasan/feedback
// Route::get('/test', function () {
    //     return view('tempUlasan');
    // });
    
Route::get('/informasi-ulasan/{id}', [SistemUmpanBalikController::class, 'display_ulasan']);
Route::get('/fetch-destinasi', [SistemUmpanBalikController::class, 'display_ulasan'])->name('fetch.destinasi');


Route::get('/',  [LandingPageController::class, 'index'])->name('landing_page');
Route::get('/promo/{post}', [LandingPageController::class, 'show_promo'])->name('show_promo');

Route::middleware(['auth', 'user-access:wisatawan'])->group(function () {
  
	// Route::get('/', [HomeController::class, 'index'])->name('home');
	
	// ========================== Ulasan========================================
	// Mengarahkan user ke hal yang menampilkan list destinasi yang akan diberikan feedback
	Route::get('/ulasan',[SistemUmpanBalikController::class,'index']);

	// Mengarahkan user ke hal form untuk mengisih feedback
	Route::get('/ulasan/form',[SistemUmpanBalikController::class,'create']);

	// Setelah form pada hal sebelumnya diisi selanjut sistem akan menyimpan data tersebut melalui fungsi "store" dan membawa user ke hal selanjutnya yaitu /ulasan
	Route::post('/ulasan',[SistemUmpanBalikController::class,'store']);

	// Rute eksplore wisata
	Route::get('/eksplore-objek-wisata', [EksploreController::class, 'index'])->name('eksplore-objek-wisata.index');

	// ============================ History ==============================
	Route::get('/history',[HistoryController::class,'index']);
	
	// ============================ Wishlist ==============================
	Route::get('/wishlist',[WishlistController::class,'index']);

    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:pengelola'])->group(function () {
    
	// Route::get('/pengelola/home', [HomeController::class, 'pengelolaHome'])->name('pengelola.home');

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

	// ========================== Informasi Statistik========================================

	Route::get('/informasi-statistik', [InformasiStatistikController::class,'InfoPenjualan']);
    
});
  
/*------------------------------------------
--------------------------------------------
All Admin Routes List
--------------------------------------------
--------------------------------------------*/
Route::middleware(['auth', 'user-access:admin'])->group(function () {
  
    Route::get('/admin/home', [HomeController::class, 'adminHome'])->name('admin.home');
});

Route::middleware(['auth'])->group(function() {
	Route::get('/edit-profil/', [EditProfilController::class, 'index'])->name('edit-profil.index');
	Route::get('/edit-profil/{id}/edit', [EditProfilController::class, 'edit'])->name('edit-profil.edit');
	Route::put('/edit-profil/{id}', [EditProfilController::class, 'update'])->name('edit-profil.update');
});

// ========================== -------------  ========================================


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');