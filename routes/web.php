<?php

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SistemUmpanBalikController;

Route::get('/', function () {
    return view('welcome');
});

// Mengarahkan user ke hal yang menampilkan list destinasi yang akan diberikan feedback
Route::get('/ulasan',[SistemUmpanBalikController::class,'index']);

// Mengarahkan user ke hal form untuk mengisih feedback
Route::get('/ulasan/form',[SistemUmpanBalikController::class,'create']);

// Setelah form pada hal sebelumnya diisi selanjut sistem akan menyimpan data tersebut melalui fungsi "store" dan membawa user ke hal selanjutnya yaitu /ulasan
Route::post('/ulasan',[SistemUmpanBalikController::class,'store']);



// Untuk mengetes file form-sistem-umpan-balik. Nanti dihapus
Route::get('/testing', function () {
    $userId = Auth::id();
    return  $userId
    ;
});

// masuk kedalam landing page atau homepage
Route::get('/landingPage', function () {
    return view('landingPage');
});

Route::get('/landingPage', function () {
    return view('landingPage');
})->name('landingPage');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
