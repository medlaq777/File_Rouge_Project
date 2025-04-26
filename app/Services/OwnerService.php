<?php

namespace App\Services;

use App\Models\Studios;
use Illuminate\Support\Facades\Storage;

class OwnerService
{
    public function createStudios(array $data, array $features, array $photos, $ownerId)
    {
        $data['user_id'] = $ownerId;
        $studio = Studios::create($data);
        $studio->category()->associate($data['category_id']);
        $studio->save();
        $studio->photos()->createMany(array_map(function ($photo) {
            return ['image_path' => $photo->store('studios/photos', 'public')];
        }, $photos));
        $studio->features()->sync($features);
        $availability = json_decode($data['availability'], true);
        if ($availability['type'] === 'custom' && !empty($availability['slots'])) {
            foreach ($availability['slots'] as $slot) {
                $studio->availabilities()->create([
                    'studios_id' => $studio->id,
                    'user_id' => $ownerId,
                    'date' => $slot['date'],
                    'start_time' => $slot['start'],
                    'end_time' => $slot['end'],
                    'status' => 'available',
                ]);
            }
        } else {
            $studio->availabilities()->create([
                'studios_id' => $studio->id,
                'user_id' => $ownerId,
                'date' => null,
                'start_time' => null,
                'end_time' => null,
                'status' => 'available',
            ]);
        }

        return $studio;
    }



    public function updateStudios(array $data, array $features, array $photos, $ownerId)
    {
        $studio = Studios::where('id', $data['id'])->where('user_id', $ownerId)->firstOrFail();
        $studio->update($data);
        if (!empty($photos)) {
            foreach ($studio->photos as $photo) {
                Storage::disk('public')->delete($photo->image_path);
                $photo->delete();
            }
            $studio->photos()->createMany(array_map(function ($photo) {
                return ['image_path' => $photo->store('studios/photos', 'public')];
            }, $photos));
        }
        $studio->features()->sync($features);
        $studio->availabilities()->delete();
        $studio->category()->associate($data['category_id']);
        $availability = json_decode($data['availability'], true);
        if ($availability['type'] === 'custom' && !empty($availability['slots'])) {
            foreach ($availability['slots'] as $slot) {
                $studio->availabilities()->create([
                    'studios_id' => $studio->id,
                    'user_id' => $ownerId,
                    'date' => $slot['date'],
                    'start_time' => $slot['start'],
                    'end_time' => $slot['end'],
                    'status' => 'available',
                ]);
            }
        } else {
            $studio->availabilities()->create([
                'studios_id' => $studio->id,
                'user_id' => $ownerId,
                'date' => null,
                'start_time' => null,
                'end_time' => null,
                'status' => 'available',
            ]);
        }
        return $studio;
    }

    public function findStudiosById($id)
    {
        return Studios::with(['category', 'features', 'photos'])->findOrFail($id);
    }

    public function findStudiosByOwnerId($ownerId)
    {
        return Studios::with(['category', 'features', 'photos'])->where('user_id', $ownerId)->get();
    }

    public function destroy($studioId, $ownerId)
    {
        $studio = Studios::where('id', $studioId)->where('user_id', $ownerId)->firstOrFail();
        foreach ($studio->photos as $photo) {
            Storage::disk('public')->delete($photo->image_path);
            $photo->delete();
        }
        $studio->features()->detach();
        $studio->availabilities()->delete();
        return $studio->delete();
    }
}
