<?php

namespace App\Services;

use App\Models\ProfileUser;

class ProfileService
{
    public function getProfile($userId)
    {
        return ProfileUser::where('user_id', $userId)->first();
    }
}
