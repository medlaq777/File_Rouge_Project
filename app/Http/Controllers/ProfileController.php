<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\ProfileService;

class ProfileController extends Controller
{
    public function showProfile()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }
}
