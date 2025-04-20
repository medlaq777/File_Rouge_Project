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
        $request->validate([
            'studio-name' => 'required|string|max:255',
            'studio-description' => 'required|string|max:1000',
            'studio-price' => 'required|numeric|min:0|max:200',
            'studio-location' => 'required|string|max:255',
            'studio-address' => 'required|string|max:255',
        ]);
        $data = $request->only(['name', 'description', 'price', 'location', 'FullAddress']);
        if($request->hasFile('image')) {
            $data['image'] = $this->StudiosService->uploadImage($request->file('image'));
        }
        $data['user_id'] = Auth::id();
        $studio = $this->StudiosService->store($data);
        return view('Dashboard.Owner.index', [
            'studio' => $studio,
        ]);
    }
}
