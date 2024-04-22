<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\authController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\userController;
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
    return view('welcome');
});

// login/logout proses
Route::get('/login', [authController::class, 'login']);
Route::post('/login', [authController::class, 'cekLogin']);
Route::get('/logout', [authController::class, 'logout']);
// register step
Route::get('/register', [authController::class, 'register1']);
Route::post('/register', [authController::class, 'processStep1']);
Route::get('/register2', [authController::class, 'register2']);
Route::post('/register2', [authController::class, 'processStep2']);
Route::get('/register3', [authController::class, 'register3']);
Route::post('/register3', [authController::class, 'processStep3']);

// Landing Page
Route::get('/landing-page', [HomeController::class, 'index']);

// Informasi Wisata
Route::get('/informasi-wisata', [HomeController::class, 'infoWisata']);