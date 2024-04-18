<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

// Mengarahkan user ke hal yang menampilkan list destinasi yang akan diberikan feedback
Route::get('/ulasan',[\App\Http\Controllers\SistemUmpanBalikController::class,'index']);

// Mengarahkan user ke hal form untuk mengisih feedback
Route::get('/ulasan/form',[\App\Http\Controllers\SistemUmpanBalikController::class,'create']);

// Setelah form pada hal sebelumnya diisi selanjut sistem akan menyimpan data tersebut melalui fungsi "store" dan membawa user ke hal selanjutnya yaitu /ulasan
Route::post('/ulasan',[\App\Http\Controllers\SistemUmpanBalikController::class,'store']);



// Untuk mengetes file form-sistem-umpan-balik. Nanti dihapus
Route::get('/form-ulasan', function () {
    return view('form-sistem-umpan-balik');
});





//Route::post('/form-ulasan', function(){
//    $saran = new Saran();
//    $saran->rating('nomor');
//    $saran->penilaian_nps('nps');
//})
