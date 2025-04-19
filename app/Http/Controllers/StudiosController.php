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
        $studios = null;
        $equipements = null;
        if ($min && $max) {
            $studios = $this->studiosService->filterByPrice($min, $max);
        } else {
            $studios = $this->studiosService->index();
        }
        if ($request->has('equipement')) {
            $equipements = $request->input('equipement');
            $studios = $this->studiosService->filterByEquipement($equipements);
        }
        if ($studios) {
            return response()->json($studios);
        }
        return response()->json(['error' => 'Invalid filter option'], 400);
    }

}
