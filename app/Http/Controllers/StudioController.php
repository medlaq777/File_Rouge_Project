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

    public function index()
    {
        $user = Auth::id();
        $studios = $this->StudiosService->show($user);
        // dd($studios);
        return view('Dashboard.Owner.index', [
            'studios' => $studios,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'studio-name' => 'required|string|max:255',
            'studio-description' => 'required|string|max:255',
            'studio-address' => 'required|string|max:255',
            'studio-location' => 'required|string|max:255',
            'studio-price' => 'required|numeric',
            'studio-image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only([
            'studio-name',
            'studio-description',
            'studio-address',
            'studio-location',
            'studio-price',
            'studio-available',
            'studio-feature',
            'start_date',
            'end_date',
        ]);
        if ($request->hasFile('studio-image')) {
            $data['studio-image'] = $request->file('studio-image')->store('images/studios', 'public');
            $data['user_id'] = Auth::id();
            $studios = $this->StudiosService->store($data);
            return redirect()->route('dashboard')->with('success', 'Studio created successfully.');
        }
    }
}
