<?php

namespace App\Http\Controllers;

use App\Services\studiosService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StudioController extends Controller
{
    private $studiosService;

    public function __construct(studiosService $studiosService)
    {
        $this->studiosService = $studiosService;
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'price' => 'required|numeric|min:0|max:200',
            'location' => 'required|string|max:255',
            'FullAddress' => 'required|string|max:255',
            'Studio_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        $data = $request->only(['name', 'description', 'price', 'location', 'FullAddress', 'Studio_image']);
        $data['user_id'] = Auth::id();
        $data['Studio_image'] = $request->file('Studio_image');
        $studio = $this->studiosService->store($data);
        return view('studio.create', [
            'studio' => $studio,
            'message' => 'Studio created successfully!',
        ]);
    }
}
