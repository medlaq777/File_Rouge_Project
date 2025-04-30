<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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
        return Auth::user()
            ->bookings()
            ->where('user_id', Auth::id())
            ->with([
                'studio.category',
                'studio.availabilities',
            ])
            ->get();
    }

    public function getBookingStudio($id)
    {
        $userArtist = Auth::user();
        $studioId = $id;
        return [
            'user' => $userArtist,
            'studio_id' => $studioId
        ];
    }


    // public function getMyBookingDetails($bookingId)
    // {
    //     return Auth::user()
    //         ->bookings()
    //         ->where('id', $bookingId)
    //         ->with([
    //             'studio.category',
    //             'studio.availabilities',
    //         ])
    //         ->first();
    // }


    public function getMyReviews()
    {
        return Auth::user()
            ->reviews()
            ->with([
                'studio.category',
                'studio.availabilities',
            ])
            ->get();
    }


    public function getEditMyReview($id)
    {
        $review = Auth::user()
            ->reviews()
            ->where('id', $id)
            ->firstOrFail();

        $review->update([
            'comment' => request('comment'),
            'rating' => request('rating'),
        ]);

        return $review;
    }

    public function getDeleteMyReview($id)
    {
        $review = Auth::user()
            ->reviews()
            ->where('id', $id)
            ->firstOrFail();

        $review->delete();
    }


}
