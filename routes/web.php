<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/help-center', function () {
    return view('helpCenter');
})->name('helpCenter');


Route::get('/terms', function () {
    return view('terms');
})->name('terms');


Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/faq', function () {
    return view('faq');
})->name('faq');


Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showProfile')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');


Route::get("dashboard", function () {
    return view("Dashboard.Owner.index");
})->name("dashboard")->middleware('auth');
