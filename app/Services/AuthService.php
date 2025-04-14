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
        ProfileUser::create([
            'user_id' => $user->id,
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


    public function login(array $data)
    {
        $validatedData = $this->validateLoginData($data);
        $user = User::where('email', $validatedData['email'])->first();
        if (!$user ) {
            throw new \Exception('Invalid credentials');
        }
        if (!Hash::check($validatedData['password'], $user->password)) {
            throw new \Exception('Invalid credentials');
        }
        return $user;
    }

    public function validateLoginData(array $data)
    {
        return validator($data, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ])->validate();
    }
}
