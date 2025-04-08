<?php
namespace App\Http\Controllers;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    // Route::get('/profile', [ProfileController::class, 'show']);
    // Route::put('/profile', [ProfileController::class, 'update']);
    // Route::put('/profile/password', [ProfileController::class, 'updatePassword']);
    // Route::post('/profile/image', [ProfileController::class, 'updateProfileImage']);
});
