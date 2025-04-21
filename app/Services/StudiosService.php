<?php

namespace App\Services;

use App\Models\Studios;
use App\Models\Availability;
use DateTime;
use DateInterval;
use DatePeriod;
use Exception;

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


        if (isset($data['availability']) && isset($data['availability']['type'])) {
            $type = $data['availability']['type'];
            if ($type === 'custom') {
                $slots = $data['availability']['slots'] ?? [];
                $dates = [];
                $starts = [];
                $ends = [];
                foreach ($slots as $slot) {
                    $dates[] = $slot['date'];
                    $starts[] = $slot['start'];
                    $ends[] = $slot['end'];
                }
                $this->handleCustom($studios->id, $studios->user_id, [
                    'availability_date' => $dates,
                    'start_time' => $starts,
                    'end_time' => $ends,
                ]);
            } elseif ($type === 'recurring') {
                $this->handleRecurring($studios->id, $studios->user_id, [
                    'recurring_days' => $data['availability']['days'] ?? [],
                    'recurring_start_time' => $data['availability']['start_time'] ?? null,
                    'recurring_end_time' => $data['availability']['end_time'] ?? null,
                    'recurring_start_date' => $data['availability']['start_date'] ?? null,
                    'recurring_end_date' => $data['availability']['end_date'] ?? null,
                ]);
            } elseif ($type === 'always') {
                $this->handleAlways($studios->id, $studios->user_id);
            }
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

    public function setAvailability($studioId, array $data)
    {
        $studio = Studios::find($studioId);

        if (!$studio) {
            throw new Exception("Studio not found.");
        }

        $type = $data['availability_type'] ?? null;

        if ($type === 'custom') {
            $this->handleCustom($studioId, $studio->user_id, $data);
        } elseif ($type === 'recurring') {
            $this->handleRecurring($studioId, $studio->user_id, $data);
        } elseif ($type === 'always') {
            $this->handleAlways($studioId, $studio->user_id); // <-- FIXED
        } else {
            throw new Exception("Invalid availability type.");
            }
    }

    public function getAvailability($studioId)
    {
        return Availability::where('studio_id', $studioId)->get();
    }

    private function handleCustom($studioId, $userId, $data)
    {
        $dates = $data['availability_date'] ?? [];
        $starts = $data['start_time'] ?? [];
        $ends = $data['end_time'] ?? [];

        if (count($dates) !== count($starts) || count($starts) !== count($ends)) {
            throw new Exception("Invalid custom availability data.");
        }

        for ($i = 0; $i < count($dates); $i++) {
            try {
                $date = new DateTime($dates[$i]);
                $startTime = new DateTime($starts[$i]);
                $endTime = new DateTime($ends[$i]);
            } catch (\Exception $e) {
                throw new Exception("Invalid date or time format.");
            }

            Availability::create([
                'studio_id' => $studioId,
                'user_id' => $userId,
                'date' => $date->format('Y-m-d'),
                'start_time' => $startTime->format('H:i:s'),
                'end_time' => $endTime->format('H:i:s'),
                'status' => 'available',
            ]);
        }
    }

    private function handleRecurring($studioId, $userId, $data)
    {
        $days = $data['recurring_days'] ?? [];
        $startTimeStr = $data['recurring_start_time'] ?? null;
        $endTimeStr = $data['recurring_end_time'] ?? null;
        $startDateStr = $data['recurring_start_date'] ?? null;
        $endDateStr = $data['recurring_end_date'] ?? null;

        if (!$startTimeStr || !$endTimeStr || !$startDateStr || !$endDateStr || empty($days)) {
            throw new Exception("Missing recurring availability data.");
        }

        try {
            $startTime = new DateTime($startTimeStr);
            $endTime = new DateTime($endTimeStr);
            $startDate = new DateTime($startDateStr);
            $endDate = new DateTime($endDateStr);
        } catch (\Exception $e) {
            throw new Exception("Invalid date/time format.");
        }

        $interval = new DateInterval('P1D');
        $period = new DatePeriod($startDate, $interval, $endDate->modify('+1 day'));

        foreach ($period as $date) {
            $dayName = strtolower($date->format('l'));
            foreach ($days as $selectedDay) {
                if (strtolower($selectedDay) === $dayName) {
                    Availability::create([
                        'studio_id' => $studioId,
                        'user_id' => $userId,
                        'date' => $date->format('Y-m-d'),
                        'start_time' => $startTime->format('H:i:s'),
                        'end_time' => $endTime->format('H:i:s'),
                        'status' => 'available',
                    ]);
                    break;
                }
            }
        }
    }

    private function handleAlways($studioId, $userId)
    {
        Availability::create([
            'studio_id' => $studioId,
            'user_id' => $userId,
            'date' => '1900-01-01',
            'start_time' => '00:00:00',
            'end_time' => '23:59:59',
            'status' => 'available',
        ]);
    }
}
