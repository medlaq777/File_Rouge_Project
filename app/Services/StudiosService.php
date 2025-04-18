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
            $count = Studios::count();
            $pagination = Studios::paginate(12);
            $equipements = Equipement::distinct('name')->get();
            return view('explore', [
                'count' => $count,
                'studios' => $pagination,
                'pagination' => $pagination->toArray(),
                'stud' => $equipements->toArray(),
            ]);
        }
    }


    public function Search(?string $search = null)
    {
        if (!$search) {
            $studios = Studios::all();
        } else {
            $studios = Studios::where('location', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->get();
        }
        return $studios;
    }
}
