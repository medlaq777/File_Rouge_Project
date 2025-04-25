<?php

namespace App\Http\Controllers;

use App\Models\Studios;
use App\Models\Category;
use App\Models\Feature;
use App\Models\Payment;
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
        $ownerId = Auth::user()->id;
        $studios = Studios::with(['category', 'photos'])->paginate(10);
        $myStudios = Studios::where('user_id', Auth::id())->get();
        $studioAvailability = $myStudios->map(function ($studio) {
            $availability = $studio->availabilities->first();
            return $availability ? $availability->status : 'Unavailable';
            })->implode(',');
        $categories = Category::all();
        $features = Feature::all();
        $count = $myStudios->count();
        $myTotalIncome = number_format(Payment::where('status', 'completed')
            ->whereRelation('booking.studio', 'user_id', $ownerId)
            ->sum('total_price'), 0, ',', ',');

        $thisMonthIncome = number_format(Payment::where('status', 'completed')
            ->whereRelation('booking.studio', 'user_id', $ownerId)
            ->whereMonth('payment_date', now()->month)
            ->sum('total_price'), 0, ',', ',');



        $pendingPayment = number_format(Payment::where('status', 'pending')
            ->whereHas('booking.studio', fn($query) => $query->where('user_id', $ownerId))
            ->sum('total_price'), 0, ',', ',');

        $averageRating = number_format(Studios::where('user_id', $ownerId)
            ->withAvg('reviews', 'rating')
            ->get()
            ->pluck('reviews_avg_rating')
            ->filter()
            ->avg() ?? 0, 1);


        $paymentHistories = Payment::where('status', 'completed')
            ->whereHas('booking.studio', fn($query) => $query->where('user_id', $ownerId))
            ->where('payment_date', '>=', now()->subMonth())
            ->orderBy('payment_date', 'desc')
            ->get();

        return view('Dashboard.Owner.index', compact(
            'studios',
            'categories',
            'features',
            'count',
            'myStudios',
            'studioAvailability',
            'myTotalIncome',
            'thisMonthIncome',
            'pendingPayment',
            'paymentHistories',
            'averageRating'
        ));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:200',
            'category_id' => 'required|exists:categories,id',
            'availability_type' => 'required|in:custom,always,recurring',
            'availability_dates' => 'array',
            'availability_dates.*' => 'nullable|date',
            'start_times' => 'array',
            'start_times.*' => 'nullable|date_format:H:i',
            'end_times' => 'array',
            'end_times.*' => 'nullable|date_format:H:i',
            'recurring_days' => 'array',
            'recurring_days.*' => 'nullable|string|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'recurring_start_time' => 'nullable|date_format:H:i',
            'recurring_end_time' => 'nullable|date_format:H:i',
            'recurring_start_date' => 'nullable|date',
            'recurring_end_date' => 'nullable|date|after_or_equal:recurring_start_date',
            'features' => 'array',
            'features.*' => 'exists:features,id',
            'custom_features' => 'nullable|string',
            'photos' => 'array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $data = [
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'user_id' => Auth::id(),
        ];

        $features = $request->input('features', []);
        $customFeatures = $request->input('custom_features', '');

        $availability = [
            'type' => $request->input('availability_type'),
        ];
        if ($availability['type'] === 'custom') {
            $availability['slots'] = [];
            $dates = $request->input('availability_dates', []);
            $starts = $request->input('start_times', []);
            $ends = $request->input('end_times', []);
            for ($i = 0; $i < count($dates); $i++) {
                if (!empty($dates[$i]) && !empty($starts[$i]) && !empty($ends[$i])) {
                    $availability['slots'][] = [
                        'date' => $dates[$i],
                        'start' => $starts[$i],
                        'end' => $ends[$i],
                    ];
                }
            }
        } elseif ($availability['type'] === 'recurring') {
            $availability['days'] = $request->input('recurring_days', []);
            $availability['start_time'] = $request->input('recurring_start_time');
            $availability['end_time'] = $request->input('recurring_end_time');
            $availability['start_date'] = $request->input('recurring_start_date');
            $availability['end_date'] = $request->input('recurring_end_date');
        }

        $data['availability'] = json_encode($availability);

        $photos = $request->file('photos', []);
        $ownerId = Auth::user()->id;
        $this->StudiosService->createStudios($data, $features, $photos, $ownerId);

        return redirect()->route('dashboard')->with('success', 'Studio created successfully.');
    }

    public function update(Request $request)
    {
        $request->validate([
            'studio_id' => 'required|exists:studios,id',
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
            'location' => 'required|string|max:255',
            'price' => 'required|numeric|min:0|max:200',
            'category_id' => 'required|exists:categories,id',
            'availability_type' => 'required|in:custom,always,recurring',
            'availability_dates' => 'array',
            'availability_dates.*' => 'nullable|date',
            'start_times' => 'array',
            'start_times.*' => 'nullable|date_format:H:i',
            'end_times' => 'array',
            'end_times.*' => 'nullable|date_format:H:i',
            'recurring_days' => 'array',
            'recurring_days.*' => 'nullable|string|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'recurring_start_time' => 'nullable|date_format:H:i',
            'recurring_end_time' => 'nullable|date_format:H:i',
            'recurring_start_date' => 'nullable|date',
            'recurring_end_date' => 'nullable|date|after_or_equal:recurring_start_date',
            'features' => 'array',
            'features.*' => 'exists:features,id',
            'custom_features' => 'nullable|string',
            'photos' => 'array',
            'photos.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        $data = [
            'id' => $request->input('studio_id'),
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'location' => $request->input('location'),
            'price' => $request->input('price'),
            'category_id' => $request->input('category_id'),
            'user_id' => Auth::id(),
        ];

        $features = $request->input('features', []);
        $customFeatures = $request->input('custom_features', '');

        $availability = [
            'type' => $request->input('availability_type'),
        ];
        if ($availability['type'] === 'custom') {
            $availability['slots'] = [];
            $dates = $request->input('availability_dates', []);
            $starts = $request->input('start_times', []);
            $ends = $request->input('end_times', []);
            for ($i = 0; $i < count($dates); $i++) {
                if (!empty($dates[$i]) && !empty($starts[$i]) && !empty($ends[$i])) {
                    $availability['slots'][] = [
                        'date' => $dates[$i],
                        'start' => $starts[$i],
                        'end' => $ends[$i],
                    ];
                }
            }
        } elseif ($availability['type'] === 'recurring') {
            $availability['days'] = $request->input('recurring_days', []);
            $availability['start_time'] = $request->input('recurring_start_time');
            $availability['end_time'] = $request->input('recurring_end_time');
            $availability['start_date'] = $request->input('recurring_start_date');
            $availability['end_date'] = $request->input('recurring_end_date');
        }

        $data['availability'] = json_encode($availability);

        $photos = $request->file('photos', []);
        $ownerId = Auth::user()->id;
        // dd($data, $features, $photos, $ownerId);
        $this->StudiosService->updateStudios($data, $features, $photos, $ownerId);
        return redirect()->route('dashboard')->with('success', 'Studio updated successfully.');
    }

    public function destroy($studioId)
    {
        $ownerId = Auth::id();
        $this->StudiosService->destroy($studioId, $ownerId);
        return redirect()->route('dashboard')->with('success', 'Studio deleted successfully.');
    }
}
