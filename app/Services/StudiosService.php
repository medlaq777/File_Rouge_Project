<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Equipement;

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
        $equipements = Equipement::distinct('name')->get(); // Eager load unique equipement names
        return view('explore', [
            'studios' => $pagination,
            'pagination' => $pagination->toArray(),
            'stud' => $equipements->toArray(), // Pass equipement data to the view
        ]);
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
