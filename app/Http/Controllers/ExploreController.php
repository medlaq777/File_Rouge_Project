<?php

namespace App\Http\Controllers;

use App\Services\ExploreService;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    private $ExploreService;
    public function __construct(ExploreService $ExploreService)
    {
        $this->ExploreService = $ExploreService;
    }

    public function index()
    {
        return $this->ExploreService->index();
    }

    public function Search(Request $request)
    {
        $search = $request->input('search', null);
        $studios = $this->ExploreService->Search($search);
        return response()->json($studios);
    }

    public function sort(Request $request)
    {
    $sort = $request->input('sort', null);
    $studios = null;

    if ($sort == 'lowest') {
        $studios = $this->ExploreService->orderLowest();
    } elseif ($sort == 'highest') {
        $studios = $this->ExploreService->orderHighest();
    } elseif ($sort == 'mostRated') {
        $studios = $this->ExploreService->mostRated();
    }

    if ($studios) {
        return response()->json($studios);
    }

    return response()->json(['error' => 'Invalid sort option'], 400);
    }

    public function filters(Request $request)
    {
    $min = $request->input('min', null);
    $max = $request->input('max', null);
    $equipment = $request->input('equipment', []); // Accept multiple equipment as an array

    // Validate that min and max are numeric if provided
    if (($min !== null && !is_numeric($min)) || ($max !== null && !is_numeric($max))) {
        return response()->json(['error' => 'Invalid filter parameters'], 400);
    }

    // Pass the parameters as an array to match the service method
    $criteria = [];

    if ($min !== null && $max !== null) {
        if ($min > $max) {
            return response()->json(['error' => 'Invalid price range'], 400);
        }
        $criteria['price_min'] = $min;
        $criteria['price_max'] = $max;
    }

    if (!empty($equipment)) {
        $criteria['equipments'] = $equipment; // Use plural to indicate multiple equipment
    }

    try {
        $studios = $this->ExploreService->filterByCriteria($criteria);
        return response()->json($studios);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
    }
    }
}
