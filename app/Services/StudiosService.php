<?php

namespace App\Services;

use App\Models\Studios;

class StudiosService
{
    public function index($userId)
    {
        return Studios::all()->where('user_id', $userId);
    }

    public function store($data)
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

        if (isset($data['studio-image'])) {
            $studios->images()->create([
                'image_path' => $data['studio-image'],
            ]);
        }
        return $studios;
    }

    public function update(array $data)
    {
        $studios = Studios::find($data['studio_id']);
        if ($studios) {
            $studios->update([
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
            if (isset($data['studio-image'])) {
                $oldImage = $studios->images()->first();
                if ($oldImage) {
                    $oldImage->delete();
                }
                $studios->images()->create([
                    'image_path' => $data['studio-image'],
                ]);
            }
            return $studios;
        }
        return null;
    }

    public function destroy($studioId)
    {
        $studios = Studios::find($studioId);
        if ($studios) {
            $studios->delete();
            return true;
        }
        return false;
    }

}
