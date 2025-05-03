<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\AdminService;

class AdminController extends Controller
{
    protected $adminService;

    public function __construct(AdminService $adminService)
    {
        $this->adminService = $adminService;
    }

    public function index()
    {
        $user = $this->adminService->index();
        return view('Dashboard.Admin.index', compact('user'));
    }
}
