<?php

namespace App\Services;

use App\Models\Booking;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ArtistService
{
    public function getMyTotalBookings()
    {
        $user = Auth::user();
        $totalBookings = $user->bookings()->count();
        return $totalBookings;
    }

    public function getMyUpcomingBookings()
    {
        $user = Auth::user();
        $upcomingBookings = $user->bookings()
        ->where('start_date', '>', now())
        ->with(['studio', 'artist'])
        ->orderBy('start_date', 'asc')
        ->get();
        return $upcomingBookings;
    }

    public function getMyFavoriteStudios()
    {
        $user = Auth::user();
        $favoriteStudios = $user->bookings()
        ->where('user_id', $user->id)
        ->get();
        return $favoriteStudios;
    }

    public function getRecentlyViewedStudios()
    {
        $user = Auth::user();
        $recentlyViewedStudios = $user->bookings()
        ->where('user_id', $user->id)
        ->orderBy('start_date', 'desc')
        ->take(5)
        ->get();
        return $recentlyViewedStudios;
    }

    public function getMyBookings()
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)
        ->with([
            'studio',
            'studio.category',
            // 'studio.availability',
            // 'studio.review',
        ]);

        $myBookings = $bookings->get();
        return response()->json($myBookings);
    }
}
