<?php

namespace App\Services;

use App\Models\ProfileUser;

class ProfileService
{
    public function getProfile($userId)
    {
        return ProfileUser::where('user_id', $userId)->first();
    }

    public function updateProfile($profileData)
    {
        $validator = $this->validateProfileData($profileData);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $profile = ProfileUser::where('user_id', $profileData['user_id'])->first();
        if ($profile) {
            $profile->update($profileData);
            return $profile;
        }

        return ProfileUser::create($profileData);
    }

    public function validateProfileData($data)
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
