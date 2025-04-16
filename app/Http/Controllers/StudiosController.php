<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studios;

class StudiosController extends Controller
{
    public function index()
    {
        $studios = Studios::paginate(4);
        $json = json_encode($studios);
        return view('welcome', compact('studios', 'json'));
    }
}
