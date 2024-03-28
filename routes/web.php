<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/ulasan', function () {
    return view('sistem-umpan-balik');
});

Route::get('/login', function () {
    return view('login');
});
