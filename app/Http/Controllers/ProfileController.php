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
        $request->validate([
            'full_name' => 'required|string|max:255',
            'username' => 'required|string|max:255',
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $user = Auth::user();
        if (!$user) {
            return redirect()->route('showLoginForm')->with('error', 'Please log in to update your profile.');
        }
        $data = $request->only([
            'full_name',
            'username',
            'phone',
            'address',
            'city',
            'country',
            'bio',
        ]);
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $data['profile_image'] = 'images/' . $imageName;
        }
        $data['user_id'] = $user->id;
        $this->profileService->updateProfile($data);
        $profile = $this->profileService->getProfile($user->id);
        return redirect()->route('showProfile', ['profile' => $profile])->with('success', 'Profile updated successfully.');
    }
}
