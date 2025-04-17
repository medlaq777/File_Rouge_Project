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
    }
    else {
        $pagination = Studios::paginate(12); // Eager load equipement
        $equipements = Studios::with('equipments')->get();
        dd($equipements->pluck('name'));
        // return view('explore', [
        //     'studios' => $pagination,
        //     'pagination' => $pagination->toArray(),
        //     'stud' => $equipements->toArray(), // Pass equipement data to the view
        // ]);
    }
}

    public function Search(?string $search = null)
    {
        if (!$search) {
            $studios = Studios::all();
        } else {
            $studios = Studios::where('location', 'like', '%' . $search . '%')->get();
        }
        return $studios;
    }
}
