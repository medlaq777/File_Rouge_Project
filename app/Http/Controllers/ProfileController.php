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
            'email' => 'required|string|email|max:255',
            'phone' => 'nullable|string|max:15',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:255',
            'country' => 'nullable|string|max:255',
            'bio' => 'nullable|string|max:500'
        ]);

        if ($request->hasFile('profile_image')) {
            $request->validate([
                'profile_image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            ]);
            $file = $request->file('profile_image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);
            $data['profile_image'] = $filename;
        }

        $user = Auth::user();
        if (!$user) {
            return redirect()->route('showLoginForm')->with('error', 'Please log in to update your profile.');
        }

        $data = $request->all();
        $data['user_id'] = $user->id;

        $this->profileService->updateProfile($data);

        return redirect()->route('showProfile')->with('success', 'Profile updated successfully.');
    }
}
