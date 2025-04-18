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
        $sort = $request->query('sort');
        $studios = null;

        switch ($sort) {
            case 'orderLowest':
                $studios = $this->studiosService->orderLowest();
                break;
            case 'orderHighest':
                $studios = $this->studiosService->orderHighest();
                break;
            case 'mostRated':
                $studios = $this->studiosService->mostRated();
                break;
            default:
                $studios = $this->studiosService->index();
                break;
        }
        return response()->json($studios);
    }
}
