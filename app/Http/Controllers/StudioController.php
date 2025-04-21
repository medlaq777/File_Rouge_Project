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
        $studios = $this->StudiosService->index($user);
        $count = $studios->count();
        return view('Dashboard.Owner.index', [
            'studios' => $studios,
            'count' => $count,
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'studio-name' => 'required|string|max:255',
            'studio-description' => 'required|string|max:255',
            'studio-address' => 'required|string|max:255',
            'studio-location' => 'required|string|max:255',
            'studio-price' => 'required|numeric|min:0|max:200',
            'studio-image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only([
            'studio-name',
            'studio-description',
            'studio-address',
            'studio-location',
            'studio-price',
        ]);
        if ($request->hasFile('studio-image')) {
            $data['studio-image'] = $request->file('studio-image')->store('images/studios', 'public');
        }
        $data['user_id'] = Auth::id();
        $this->StudiosService->store($data);
        $studios = $this->StudiosService->index($data['user_id']);
        $count = $studios->count();
        return view('Dashboard.Owner.index', [
            'studios' => $studios,
            'count' => $count,
        ])->with('success', 'Studio deleted successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'studio-name' => 'required|string|max:255',
            'studio-description' => 'required|string|max:255',
            'studio-address' => 'required|string|max:255',
            'studio-location' => 'required|string|max:255',
            'studio-price' => 'required|numeric|min:0|max:200',
            'studio-image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only([
            'studio-name',
            'studio-description',
            'studio-address',
            'studio-location',
            'studio-price',
        ]);
        if ($request->hasFile('studio-image')) {
            $data['studio-image'] = $request->file('studio-image')->store('images/studios', 'public');
        }
        $data['studio_id'] = $request->input('studio_id');
        
        $data['user_id'] = Auth::id();
        $this->StudiosService->update($data);
        $studios = $this->StudiosService->index($data['user_id']);
        $count = $studios->count();
        return view('Dashboard.Owner.index', [
            'studios' => $studios,
            'count' => $count,
        ])->with('success', 'Studio deleted successfully.');
    }
    public function destroy($id)
    {
        $this->StudiosService->destroy($id);
        $studios = $this->StudiosService->index(Auth::id());
        $count = $studios->count();
        return view('Dashboard.Owner.index', [
            'studios' => $studios,
            'count' => $count,
        ])->with('success', 'Studio deleted successfully.');
    }


}
