<?php

namespace App\Services;

use App\Models\ProfileUser;

class ProfileService
{
    public function getProfile($userId)
    {
        return ProfileUser::where('user_id', $userId)->first();
    }

    public function updateProfile($profile, $data)
    {
        if ($profile) {
            $profile->update($this->validateProfileData($data));
            return $profile;
        }
        return null;
    }

    public function validateProfileData($data)
    {
        return validator($data, [
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:profile_users,username,' . $data['id'],
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
