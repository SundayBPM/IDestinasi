<?php

use Illuminate\Support\Facades\Route;


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


