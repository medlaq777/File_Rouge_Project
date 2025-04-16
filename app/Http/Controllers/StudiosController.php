<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Studios;

class StudiosController extends Controller
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
