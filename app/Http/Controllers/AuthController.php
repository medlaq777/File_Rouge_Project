<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\AuthService;

class AuthController extends Controller
{
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }
    public function register(Request $request)
    {
        $userData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:artist,owner',
        ]);

        $user = $this->authService->register($userData);

        return response()->json(['user' => $user], 201);
    }
}
