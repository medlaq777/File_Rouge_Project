<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Equipement;
use Illuminate\Support\Facades\Auth;

class StudiosService
{
    public function store(array $data)
    {
        $studio = new Studios();
        $studio->name = $data['name'];
        $studio->description = $data['description'];
        $studio->price = $data['price'];
        $studio->location = $data['location'];
        $studio->FullAddress = $data['FullAddress'];
        $studio->user_id = Auth::id();

        if (isset($data['Studio_image'])) {
            $imagePath = $data['Studio_image']->store('images', 'public');
            $studio->Studio_image = '/storage/' . $imagePath;
        }

        return $studio->save();
    }
}
