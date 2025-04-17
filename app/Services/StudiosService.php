<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\ProfileUser;
use Illuminate\Support\Facades\Hash;

class StudiosService
{
    public function index()
    {
        if (request()->routeIs('welcome')) {
            $pagination = Studios::paginate(4);
            return view('welcome', ['studios' => $pagination]);
        } else {
            $studios = Studios::all();
            return view('explore', ['studios' => $studios]);
        }
    }
}
