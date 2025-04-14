<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function attemptLogin(array $credentials)
    {
        $credentials['password'] = Hash::make($credentials['password']);
        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return $user;
        }
    }

    public function logout()
    {
        Auth::logout();
    }

    public function register(array $data)
    {
        $user = User::create([
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role'=> $data['role'] ?? 'artist',
        ]);

        Auth::login($user);

        return $user;
    }

}
