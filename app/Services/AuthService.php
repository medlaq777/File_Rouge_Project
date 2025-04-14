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
        $validatedData = $this->validateRegistrationData($data);
        $user = User::create([
            'fullname' => $validatedData['first-name'] . ' ' . $validatedData['last-name'],
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);

        Auth::login($user);

        return $user;
    }

    public function validateRegistrationData(array $data)
    {
        return validator($data, [
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:artist,owner',
        ])->validate();
    }

}
