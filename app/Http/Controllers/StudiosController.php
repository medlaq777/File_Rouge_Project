<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studios;

class StudiosController extends Controller
{
    public function index()
    {
        // Fetch all studios from the database
        $studios = Studios::paginate(4);

        // Return the view with the studios data
        return view('welcome', compact('studios'));
    }
}
