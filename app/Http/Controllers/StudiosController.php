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
    $min = $request->input('min');
    $max = $request->input('max');

    // Validate that min and max are numeric and min is less than or equal to max
    if (!is_numeric($min) || !is_numeric($max) || $min > $max) {
        return response()->json(['error' => 'Invalid filter parameters'], 400);
    }

    // Fetch studios based on the price range
    $studios = $this->studiosService->filterByPrice($min, $max);

    // Return the filtered studios
    return response()->json($studios);
}

}
