<?php

namespace App\Services;

use App\Models\User;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Contracts\User as SocialiteUser;
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
        Auth::login($user, true);
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
        Auth::login($user, true);
        return $user;
    }

    public function validateLoginData(array $data)
    {
        return validator($data, [
            'email' => 'required|string|email',
            'password' => 'required|string|min:8',
        ])->validate();
    }

    public function logout()
    {
        Auth::logout();
    }

    public function handleSocialiteUser(string $provider, SocialiteUser $socialiteUser)
    {
        $user = User::where('email', $socialiteUser->getEmail())->first();

        if (!$user) {
            // Create the user
            $user = User::create([
                'email' => $socialiteUser->getEmail(),
                'name' => $socialiteUser->getName() ?? $socialiteUser->getNickname(),
                'provider' => $provider,
                'provider_id' => $socialiteUser->getId(),
                'email_verified_at' => now(),
                'password' => bcrypt(rand(100000, 999999)),
                'role' => 'owner', // Default role for social login
            ]);

            // Create the profile with social data
            $this->createSocialProfile($user, $socialiteUser, $provider);
        }

        Auth::login($user, true);
        return $user;
    }

    protected function createSocialProfile(User $user, SocialiteUser $socialiteUser, string $provider)
    {
        $profileData = [
            'user_id' => $user->id,
            'full_name' => $socialiteUser->getName(),
            'username' => $this->generateUsername($socialiteUser),
        ];

        // Add provider-specific data
        if ($provider === 'facebook') {
            $profileData = array_merge($profileData, [
                'first_name' => $socialiteUser->user['first_name'] ?? null,
                'last_name' => $socialiteUser->user['last_name'] ?? null,
            ]);
        } elseif ($provider === 'google') {
            $nameParts = explode(' ', $socialiteUser->getName());
            $profileData = array_merge($profileData, [
                'first_name' => $nameParts[0] ?? null,
                'last_name' => end($nameParts) ?? null,
            ]);
        }

        ProfileUser::create($profileData);
    }

    protected function generateUsername(SocialiteUser $socialiteUser)
    {
        // Generate username from email or name
        $base = strtok($socialiteUser->getEmail(), '@') ??
                str_replace(' ', '', strtolower($socialiteUser->getName()));

        $username = $base;
        $counter = 1;

        // Ensure username is unique
        while (ProfileUser::where('username', $username)->exists()) {
            $username = $base . $counter;
            $counter++;
        }

        return $username;
    }
}
