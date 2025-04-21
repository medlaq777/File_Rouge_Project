<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\StudioController;
#Provider Auth
Route::get('/auth/{provider}', [AuthController::class, 'redirectToProvider'])->name('auth.provider');
Route::get('/auth/{provider}/callback', [AuthController::class, 'handleProviderCallback']);



Route::get('/', [
    ExploreController::class, 'index'
])->name('welcome');

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

Route::get('/explore', [ExploreController::class, 'index'])->name('explore');
Route::get('/explore/search', [ExploreController::class, 'Search'])->name('search');
Route::get('/explore/sort', [ExploreController::class, 'sort'])->name('sort');
Route::get('/explore/filters', [ExploreController::class, 'filters'])->name('filters');

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('showLoginForm');
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('showRegisterForm');

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::post('/register', [AuthController::class, 'register'])->name('register');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

Route::get('/profile', [ProfileController::class, 'showProfile'])->name('showProfile')->middleware('auth');
Route::post('/profile/update', [ProfileController::class, 'updateProfile'])->name('updateProfile')->middleware('auth');

Route::get("dashboard", [StudioController::class, 'index'])->name("dashboard")->middleware('auth');


Route::post('store/studio', [StudioController::class, 'store'])->name('store.studio')->middleware('auth');
Route::put('update/studio', [StudioController::class, 'update'])->name('update.studio')->middleware('auth');
Route::delete('/delete/studio/{id}', [StudioController::class, 'destroy'])->name('delete.studio')->middleware('auth');
