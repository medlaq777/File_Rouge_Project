<?php

namespace App\Http\Controllers;

use App\Services\StudiosService;
use Illuminate\Http\Request;

class StudiosController extends Controller
{
    private $studiosService;
    public function __construct(StudiosService $studiosService)
    {
        $this->studiosService = $studiosService;
    }
    public function index()
    {
        return $this->studiosService->index();
    }

    public function Search(Request $request)
    {
        $search = $request->input('search', null);
        $studios = $this->studiosService->Search($search);
        return response()->json($studios);
    }
    public function sort(Request $request)
    {
    $sort = $request->input('sort', null);
    $studios = null;

    if ($sort == 'lowest') {
        $studios = $this->studiosService->orderLowest();
    } elseif ($sort == 'highest') {
        $studios = $this->studiosService->orderHighest();
    } elseif ($sort == 'mostRated') {
        $studios = $this->studiosService->mostRated();
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
        $studios = $this->studiosService->filterByCriteria($criteria);
        return response()->json($studios);
    } catch (\Exception $e) {
        return response()->json(['error' => 'Server error: ' . $e->getMessage()], 500);
    }
}
}
