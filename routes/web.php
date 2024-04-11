<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('welcome');
});

//Route::get('/ulasan', function () {
//    return view('sistem-umpan-balik');
//});
Route::get('/ulasan',[\App\Http\Controllers\SistemUmpanBalikController::class,'index']);

Route::get('/form-ulasan', function () {
    return view('form-sistem-umpan-balik');
});

//Route::post('/form-ulasan', function(){
//    $saran = new Saran();
//    $saran->rating('nomor');
//    $saran->penilaian_nps('nps');
//})
