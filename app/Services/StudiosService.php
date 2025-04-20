<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Equipement;
use Illuminate\Support\Facades\Auth;

class StudiosService
{
    public function show($userId)
    {
        return Studios::with('images')->where('user_id', $userId)->get();
    }

    public function store(array $data)
    {
        $studios = Studios::create([
            'user_id' => $data['user_id'],
            'name' => $data['studio-name'],
            'description' => $data['studio-description'],
            'address' => $data['studio-address'],
            'location' => $data['studio-location'],
            'price' => $data['studio-price'],
            'available' => $data['studio-available'] ?? 1,
            'feature' => $data['studio-feature'] ?? 0,
            'start_date' => $data['start_date'] ?? now(),
            'end_date' => $data['end_date'] ?? now()->addYear(1),
        ]);

        $studios->images()->create([
            'image_path' => $data['studio-image'],
        ]);
        // if (isset($data['studio-equipement'])) {
        //     foreach ($data['studio-equipement'] as $equipement) {
        //         Equipement::create([
        //             'studio_id' => $studios->id,
        //             'name' => $equipement,
        //         ]);
        //     }
        // }
        return $studios;
    }
}
