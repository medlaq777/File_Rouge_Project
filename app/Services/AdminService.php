<?php

namespace App\Services;

use Illuminate\Support\Facades\Auth;

class AdminService
{
    public function index()
    {
        $user = Auth::user();
        return $user->isAdmin();
    }
}
