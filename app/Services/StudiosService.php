<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Availability;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class StudiosService
{
     // ...existing code...
    public function createStudios(array $data, array $features, array $photos, $ownerId)
    {
        $data['user_id'] = $ownerId;
        $Studios = Studios::create($data);
        $Studios->category()->associate($data['category_id']);
        $Studios->save();
        $Studios->photos()->createMany(array_map(function ($photo) {
            return ['image_path' => $photo->store('studios/photos', 'public')];
        }, $photos));

        // Sync features
        $Studios->features()->sync($features);
        $availability = json_decode($data['availability'], true);

        if ($availability['type'] === 'custom' && !empty($availability['slots'])) {
            foreach ($availability['slots'] as $slot) {
                $Studios->availabilities()->create([
                    'studios_id' => $Studios->id,
                    'user_id' => $ownerId,
                    'date' => $slot['date'],
                    'start_time' => $slot['start'],
                    'end_time' => $slot['end'],
                    'status' => 'available',
                ]);
            }
        } else {
            $Studios->availabilities()->create([
                'studios_id' => $Studios->id,
                'user_id' => $ownerId,
                'date' => null,
                'start_time' => null,
                'end_time' => null,
                'status' => 'available',
            ]);
        }

        return $Studios;
    }
// ...existing code...

    // public function updateStudios(Studios $Studios, array $data, array $features, array $newPhotos = [], array $photosToDelete = [])
    // {
    //     $Studios->update($data);

    //     // Sync features
    //     $Studios->features()->sync($features);

    //     // Delete selected photos
    //     foreach ($photosToDelete as $photoId) {
    //         $photo = $Studios->photos()->find($photoId);
    //         if ($photo) {
    //             Storage::disk('public')->delete($photo->url);
    //             $photo->delete();
    //         }
    //     }

    //     // Add new photos
    //     foreach ($newPhotos as $photo) {
    //         $path = $photo->store('Studioss/photos', 'public');
    //         $Studios->photos()->create(['url' => $path]);
    //     }

    //     return $Studios;
    // }

    // public function addAvailability(Studios $Studios, array $availabilityData)
    // {
    //     return $Studios->availabilities()->create($availabilityData);
    // }

    // public function updateAvailability(Availability $availability, array $data)
    // {
    //     $availability->update($data);
    //     return $availability;
    // }

    // public function deleteAvailability(Availability $availability)
    // {
    //     $availability->delete();
    // }

    // public function searchStudioss(array $filters)
    // {
    //     $query = Studios::query()->with(['category', 'features', 'photos']);

    //     if (isset($filters['category'])) {
    //         $query->where('Studios_category_id', $filters['category']);
    //     }

    //     if (isset($filters['min_price'])) {
    //         $query->where('prix_par_heure', '>=', $filters['min_price']);
    //     }

    //     if (isset($filters['max_price'])) {
    //         $query->where('prix_par_heure', '<=', $filters['max_price']);
    //     }

    //     if (isset($filters['features'])) {
    //         $query->whereHas('features', function($q) use ($filters) {
    //             $q->whereIn('features.id', $filters['features']);
    //         });
    //     }

    //     if (isset($filters['location'])) {
    //         $query->where('localisation', 'like', '%'.$filters['location'].'%');
    //     }

    //     if (isset($filters['date'])) {
    //         $query->whereHas('availabilities', function($q) use ($filters) {
    //             $q->where('date', $filters['date'])
    //               ->where('is_booked', false);
    //         });
    //     }

    //     return $query->orderBy('note_moyenne', 'desc')->paginate(10);
    // }
}
