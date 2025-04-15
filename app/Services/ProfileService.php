<?php

namespace App\Services;

use App\Models\ProfileUser;

class ProfileService
{
    public function getProfile($userId)
    {
        return ProfileUser::where('user_id', $userId)->first();
    }

    public function updateProfile(array $data)
    {
        $profile = ProfileUser::where('user_id', $data['user_id'])->first();

        if ($profile) {
            $userId = $profile->user_id;
            $data['user_id'] = $userId;
            $data['profile_image'] = $data['profile_image'] ?? $profile->profile_image;
            $data['contact_info'] = $data['contact_info'] ?? $profile->contact_info;
            $validatedData = $this->validatedata($data);
            $profile->update($validatedData);
        } else {
            $profile = ProfileUser::create($data);
        }

        return $profile;
    }

    public function validatedata(array $data)
    {
        return validator($data, [
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:profile_users,username',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'contact_info' => 'nullable|string|max:255',
        ]);
    }
}
