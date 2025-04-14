<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function showProfile()
    {
        $user = Auth::user();
        $profile = $this->profileService->getProfile();
        return view('profile', compact('user', 'profile'));
    }
}
