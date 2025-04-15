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
        $profile->update($data);
    } else {
        ProfileUser::create($data);
    }
}
}
