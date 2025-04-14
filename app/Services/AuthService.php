<?php

namespace App\Services;

use App\Models\User;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function register(array $data)
    {
        $validatedData = $this->validateRegistrationData($data);
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
            'role' => $validatedData['role'],
        ]);
        $user = ProfileUser::create([
            'full_name' => $validatedData['fullname'],
            'username' => $validatedData['username'],

        ]);

        return $user;
    }

    public function validateRegistrationData(array $data)
    {
        return validator($data, [
            'fullname' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:profile_users,username',
            'email' => 'required|string|email|max:255|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required|string|in:artist,owner',
        ])->validate();
    }
}
