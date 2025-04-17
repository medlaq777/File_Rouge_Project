<?php

namespace App\Http\Controllers;

use App\Services\StudiosService;

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

}
