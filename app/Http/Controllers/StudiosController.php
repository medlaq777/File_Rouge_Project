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

    public function orderLowest()
    {
        return $this->studiosService->orderLowest();
    }

    public function orderHighest()
    {
        return $this->studiosService->orderHighest();
    }

    public function mostRated()
    {
        return $this->studiosService->mostRated();
    }

}
