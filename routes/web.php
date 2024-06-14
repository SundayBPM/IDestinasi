<?php

use App\Models\User;
use App\Http\Controllers\ArtikelController;
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
use App\Http\Controllers\Verifikasi_Destinasi;
use App\Http\Controllers\PaketTourController;

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
	Route::post('/eksplore-objek-wisata/add', [WishlistController::class, 'add'])->name('eksplore.wishlist.add');
	Route::post('/eksplore-objek-wisata/remove', [WishlistController::class, 'remove'])->name('eksplore.wishlist.remove');

	// ============================ History ==============================
	Route::get('/history',[HistoryController::class,'index']);

	// ============================ Wishlist ==============================
	Route::get('/wishlist',[WishlistController::class,'index']);
	Route::post('/wishlist/add', [WishlistController::class, 'add'])->name('wishlist.add');
	Route::post('/wishlist/remove', [WishlistController::class, 'remove'])->name('wishlist.remove');

    
});
  
/*------------------------------------------
--------------------------------------------
All Pengelola Routes List
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
  
	Route::get('/admin/verification', [Verifikasi_Destinasi::class, 'index'])->name('admin.home');
	Route::post('/admin/verification/{id}/update', [Verifikasi_Destinasi::class, 'update'])->name('objek-wisata.updateStatus');
	Route::get('/admin/verification/filter', [Verifikasi_Destinasi::class, 'filter'])->name('objek-wisata.filter');
	Route::get('/admin/verification/{id}/data-pendaftar', [Verifikasi_Destinasi::class, 'show_data'])->name('objek-wisata.updateStatus');
	


});

Route::middleware(['auth'])->group(function() {
	Route::get('/edit-profil/', [EditProfilController::class, 'index'])->name('edit-profil.index');
	Route::get('/edit-profil/{id}/edit', [EditProfilController::class, 'edit'])->name('edit-profil.edit');
	Route::put('/edit-profil/{id}', [EditProfilController::class, 'update'])->name('edit-profil.update');
});

// ========================== -------------  ========================================


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/artikel', ArtikelController::class)->only('index', 'show');
Route::get('/objek-wisata', [ObjekWisataController::class, 'index'])->name('objek-wisata.index');
Route::get('/objek-wisata/{id}', [ObjekWisataController::class, 'show'])->name('objek-wisata.show');
Route::get('/objek-wisata/{id}/pembelian-tiket', [ObjekWisataController::class, 'pembelian_tiket'])->name('objek-wisata.pembelian_tiket');
Route::post('/objek-wisata/{id}/pembayaran-tiket', [ObjekWisataController::class, 'pembayaran_tiket'])->name('objek-wisata.pembayaran_tiket');

Route::get('/paket-tour', [PaketTourController::class, 'index'])->name('paket-tour.index');
Route::get('/paket-tour/{id}', [PaketTourController::class, 'show'])->name('paket-tour.show');
Route::get('/paket-tour/{id}/pembelian-tiket', [PaketTourController::class, 'pembelian_tiket'])->name('paket-tour.pembelian_tiket');
Route::post('/paket-tour/{id}/pembayaran-tiket', [PaketTourController::class, 'pembayaran_tiket'])->name('paket-tour.pembayaran_tiket');
Route::get('/landinPage',function(){return redirect()->route('');})->name('landingPage');
