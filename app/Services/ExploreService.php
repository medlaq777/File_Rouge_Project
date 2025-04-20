<?php

namespace App\Services;
use App\Models\Studios;
use App\Models\Equipement;

class ExploreService
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

    public function orderLowest()
    {
        return Studios::orderBy('price', 'asc')->get();
    }

    public function orderHighest()
    {
        return Studios::orderBy('price', 'desc')->get();
    }

    public function mostRated()
    {
        return Studios::orderBy('rating', 'desc')->get();
    }

    public function filterByPrice($min, $max)
    {
        return Studios::whereBetween('price', [$min, $max])->get();
    }

    public function filterByEquipement($equipement)
    {
        return Studios::whereHas('equipements', function ($query) use ($equipement) {
            $query->where('name', $equipement);
        })->get();
    }

    public function filterByCriteria(array $criteria)
    {
    $query = Studios::query();


    if (isset($criteria['price_min']) && isset($criteria['price_max'])) {
        $query->whereBetween('price', [$criteria['price_min'], $criteria['price_max']]);
    }


    if (isset($criteria['equipments']) && is_array($criteria['equipments'])) {
        $query->whereHas('equipements', function ($q) use ($criteria) {
            $q->whereIn('name', $criteria['equipments']);
        });
    }

    return $query->get();
    }
}
