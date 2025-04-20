<?php

namespace App\Http\Controllers;

use App\Services\StudiosService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudioController extends Controller
{
    private $StudiosService;

    public function __construct(StudiosService $StudiosService)
    {
        $this->StudiosService = $StudiosService;
    }

    public function store(Request $request)
    {
        $user = Auth::id();
        $request->validate([
            'user_id' => 'required|integer|exists:users,id',
            'studio-name' => 'required|string|max:255',
            'studio-description' => 'required|string|max:1000',
            'studio-address' => 'required|string|max:255',
            'studio-location' => 'required|string|max:255',
            'studio-price' => 'required|numeric|min:0|max:200',
            'studio-feature' => 'boolean',
            'studio-image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->only(['user_id', 'studio-name', 'studio-description', 'studio-address', 'studio-location', 'studio-price', 'studio-available', 'studio-feature']);
        if($request->hasFile('image')) {
            $data['image'] = $this->StudiosService->uploadImage($request->file('image'));
        }
        $studio = $this->StudiosService->store($data);
        return view('Dashboard.Owner.index', [
            'studio' => $studio,
        ]);
    }
}
