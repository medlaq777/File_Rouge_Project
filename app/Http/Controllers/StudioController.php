<?php

namespace App\Http\Controllers;

use App\Models\Studios;
use App\Models\Category;
use App\Models\Feature;
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
        $studios = Studios::with(['category', 'photos'])->paginate(10);
        $categories = Category::all();
        $features = Feature::all();
        $myStudios = Studios::where('user_id', Auth::id())->get();
        $count = $myStudios->count();
        return view('Dashboard.Owner.index', compact('studios', 'categories', 'features', 'count', 'myStudios'));
    }
    // public function index()
    // {
    //     $user = Auth::id();
    //     $studios = $this->StudiosService->index($user);
    //     $count = $studios->count();
    //     return view('Dashboard.Owner.index', [
    //         'studios' => $studios,
    //         'count' => $count,
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'studio-name' => 'required|string|max:255',
    //         'studio-description' => 'required|string|max:255',
    //         'studio-address' => 'required|string|max:255',
    //         'studio-location' => 'required|string|max:255',
    //         'studio-price' => 'required|numeric|min:0|max:200',
    //         'studio-image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'availability_type' => 'required|in:custom,always,recurring',
    //         'availability_date.*' => 'nullable|date',
    //         'start_time.*' => 'nullable|date_format:H:i',
    //         'end_time.*' => 'nullable|date_format:H:i',
    //         'recurring_days' => 'nullable|array',
    //         'recurring_days.*' => 'nullable|string|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
    //         'recurring_start_time' => 'nullable|date_format:H:i',
    //         'recurring_end_time' => 'nullable|date_format:H:i',
    //         'recurring_start_date' => 'nullable|date',
    //         'recurring_end_date' => 'nullable|date|after_or_equal:recurring_start_date',
    //         'studio_id' => 'required|exists:studios,id',
    //     ]);

    //     $data = $request->only([
    //         'studio-name',
    //         'studio-description',
    //         'studio-address',
    //         'studio-location',
    //         'studio-price',
    //     ]);
    //     if ($request->hasFile('studio-image')) {
    //         $data['studio-image'] = $request->file('studio-image')->store('images/studios', 'public');
    //     }
    //     $data['user_id'] = Auth::id();

    //     $availability = [
    //         'type' => $request->input('availability_type'),
    //     ];
    //     if ($availability['type'] === 'custom') {
    //         $availability['slots'] = [];
    //         $dates = $request->input('availability_date', []);
    //         $starts = $request->input('start_time', []);
    //         $ends = $request->input('end_time', []);
    //         for ($i = 0; $i < count($dates); $i++) {
    //             if (!empty($dates[$i]) && !empty($starts[$i]) && !empty($ends[$i])) {
    //                 $availability['slots'][] = [
    //                     'date' => $dates[$i],
    //                     'start' => $starts[$i],
    //                     'end' => $ends[$i],
    //                 ];
    //             }
    //         }
    //     } elseif ($availability['type'] === 'recurring') {
    //         $availability['days'] = $request->input('recurring_days', []);
    //         $availability['start_time'] = $request->input('recurring_start_time');
    //         $availability['end_time'] = $request->input('recurring_end_time');
    //         $availability['start_date'] = $request->input('recurring_start_date');
    //         $availability['end_date'] = $request->input('recurring_end_date');
    //     }

    //     $data['availability'] = $availability;
    //     $data['studio_id'] = $request->input('studio_id', null);

    //     $this->StudiosService->store($data);

    //     $studios = $this->StudiosService->index($data['user_id']);
    //     $count = $studios->count();
    //     return view('Dashboard.Owner.index', [
    //         'studios' => $studios,
    //         'count' => $count,
    //     ])->with('success', 'Studio created successfully.');
    // }

    // public function update(Request $request)
    // {
    //     $request->validate([
    //         'studio-name' => 'required|string|max:255',
    //         'studio-description' => 'required|string|max:255',
    //         'studio-address' => 'required|string|max:255',
    //         'studio-location' => 'required|string|max:255',
    //         'studio-price' => 'required|numeric|min:0|max:200',
    //         'studio-image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
    //         'availability_type' => 'required|in:custom,always,recurring',
    //         'availability_date.*' => 'nullable|date',
    //         'start_time.*' => 'nullable|date_format:H:i',
    //         'end_time.*' => 'nullable|date_format:H:i',
    //         'recurring_days' => 'nullable|array',
    //         'recurring_days.*' => 'nullable|string|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
    //         'recurring_start_time' => 'nullable|date_format:H:i',
    //         'recurring_end_time' => 'nullable|date_format:H:i',
    //         'recurring_start_date' => 'nullable|date',
    //         'recurring_end_date' => 'nullable|date|after_or_equal:recurring_start_date',
    //         'studio_id' => 'required|exists:studios,id',
    //     ]);

    //     $data = $request->only([
    //         'studio-name',
    //         'studio-description',
    //         'studio-address',
    //         'studio-location',
    //         'studio-price',
    //     ]);
    //     if ($request->hasFile('studio-image')) {
    //         $data['studio-image'] = $request->file('studio-image')->store('images/studios', 'public');
    //     }
    //     $data['user_id'] = Auth::id();

    //     $availability = [
    //         'type' => $request->input('availability_type'),
    //     ];
    //     if ($availability['type'] === 'custom') {
    //         $availability['slots'] = [];
    //         $dates = $request->input('availability_date', []);
    //         $starts = $request->input('start_time', []);
    //         $ends = $request->input('end_time', []);
    //         for ($i = 0; $i < count($dates); $i++) {
    //             if (!empty($dates[$i]) && !empty($starts[$i]) && !empty($ends[$i])) {
    //                 $availability['slots'][] = [
    //                     'date' => $dates[$i],
    //                     'start' => $starts[$i],
    //                     'end' => $ends[$i],
    //                 ];
    //             }
    //         }
    //     } elseif ($availability['type'] === 'recurring') {
    //         $availability['days'] = $request->input('recurring_days', []);
    //         $availability['start_time'] = $request->input('recurring_start_time');
    //         $availability['end_time'] = $request->input('recurring_end_time');
    //         $availability['start_date'] = $request->input('recurring_start_date');
    //         $availability['end_date'] = $request->input('recurring_end_date');
    //     }

    //     $data['availability'] = $availability;
    //     $data['studio_id'] = $request->input('studio_id', null);

    //     $this->StudiosService->update($data);
    //     $studios = $this->StudiosService->index($data['user_id']);
    //     $count = $studios->count();
    //     return view('Dashboard.Owner.index', [
    //         'studios' => $studios,
    //         'count' => $count,
    //     ])->with('success', 'Studio updated successfully.');
    // }


    // public function destroy($id)
    // {
    //     $this->StudiosService->destroy($id);
    //     $studios = $this->StudiosService->index(Auth::id());
    //     $count = $studios->count();
    //     return view('Dashboard.Owner.index', [
    //         'studios' => $studios,
    //         'count' => $count,
    //     ])->with('success', 'Studio deleted successfully.');
    // }

    // public function setAvailability($studioId, Request $request)
    // {
    //     $this->StudiosService->setAvailability($studioId, $request->all());
    //     return response()->json(['message' => 'Availability set successfully']);
    // }

    // public function getAvailability($studioId)
    // {
    //     $availabilities = $this->StudiosService->getAvailability($studioId);
    //         return response()->json($availabilities);
    // }

}
