<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Equipement;
use Illuminate\Support\Facades\Auth;

class StudiosService
{
    public function store(array $data)
    {
        $studio = Studios::create([
            'user_id' => $data['user_id'],
            'name' => $data['studio-name'],
            'description' => $data['studio-description'],
            'address' => $data['studio-address'],
            'location' => $data['studio-location'],
            'price' => $data['studio-price'],
            'available' => $data['studio-available'] ?? 1,
            'feature' => $data['studio-feature'] ?? 0,
            // 'image' => $data['studio-image'] ?? null,
            'start_date' => $data['start_date'] ?? now(),
            'end_date' => $data['end_date'] ?? now()->addYear(1),
        ]);
        // if (isset($data['equipements'])) {
        //     foreach ($data['equipements'] as $equipement) {
        //         Equipement::create([
        //             'studio_id' => $studio->id,
        //             'name' => $equipement['name'],
        //             'description' => $equipement['description'],
        //             'price' => $equipement['price'],
        //         ]);
        //     }
        // }
        return $studio;
    }

    public function uploadImage($image)
    {
        $imagePath = $image->store('images', 'public');
        return '/storage/' . $imagePath;
    }
}
