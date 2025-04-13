<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function register(array $userData): User
    {
        $userData['password'] = Hash::make($userData['password']);
        return User::create($userData);
    }

    public function login(array $credentials): ?string
    {
        if (!Auth::attempt($credentials)) {
            return null;
        }

        /** @var User $user */
        $user = Auth::user();
        $token = $user->createToken('auth_token')->plainTextToken;
        return $token;
    }

    public function logout(): void
    {
        /** @var User $user */
        $user = Auth::user();
        $user->currentAccessToken()->delete();
    }
}
