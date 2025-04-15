<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\ProfileService;
use Illuminate\Http\Request;


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
        if (!$user) {
            return redirect()->route('showLoginForm')->with('error', 'Please log in to view your profile.');
        }
        $profile = $this->profileService->getProfile($user->id);
        if (!$profile) {
            return redirect()->route('showLoginForm')->with('error', 'Please log in to view your profile.');
        }
        return view('profile', compact('user', 'profile'));
    }

    public function updateProfile(Request $request)
    {
        $user = Auth::user();

    }
}
