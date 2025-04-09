<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/auth', function () {
    return view('auth');
})->name('auth');
