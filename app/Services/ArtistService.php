<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Studios;
use App\Models\Bookings;
use App\Models\Feature;
use App\Models\Review;
use Illuminate\Support\Facades\Auth;

class ArtistService
{
    public function getMyTotalBookings()
    {
        $user = Auth::user();
        $bookings = Booking::where('user_id', $user->id)
            ->where('status','confirmed')
            ->count();
        return $bookings;
    }

    public function getMyUpcomingBookings()
    {
        $user = Auth::user();
        $upcomingBookings = Booking::where('user_id', $user->id)
            ->where('status','confirmed')
            ->where('date', '>=', now())
            ->with(['studio.category', 'studio.availabilities'])
            ->orderBy('date', 'asc')
            ->get();
        return $upcomingBookings;
    }

    public function getMyFavoriteStudios()
    {
        $user = Auth::user();
        $favoriteStudios = Booking::where('user_id', $user->id)
            ->where('status','confirmed')
            ->with(['studio.category', 'studio.availabilities'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return $favoriteStudios;
    }

    public function getRecentlyViewedStudios()
    {
        $user = Auth::user();
        $recentlyViewedStudios = booking::where('user_id', $user->id)
            ->where('status','confirmed')
            ->with(['studio.category', 'studio.availabilities'])
            ->orderBy('created_at', 'desc')
            ->take(5)
            ->get();
        return $recentlyViewedStudios;
    }

    public function getMyBookings()
    {
        $user = Auth::user();
        $bookings = booking::where('user_id', $user->id)
            ->where('status','confirmed')
            ->with(['studio.category', 'studio.availabilities'])
            ->orderBy('created_at', 'desc')
            ->get();
        return $bookings;
    }

    public function getBookingStudio($id)
    {
        $userArtist = Auth::user();
        $studio = Studios::findOrFail($id);
        $owner = $studio->user_id;
        $availabilities = $studio->availabilities->where('studio_id', $studio->id)->where('status', 'available');
        $categories = $studio->category;
        $features = Feature::all();
        $reviews = $studio->reviews;
        return [
            'user' => $userArtist,
            'studio' => $studio,
            'owner' => $owner,
            'availabilities' => $availabilities,
            'categories' => $categories,
            'features' => $features,
            'reviews' => $reviews,
        ];
    }

    public function getMyReviews()
    {
        $user = Auth::user();
        $reviews = Review::where('user_id', $user->id)->get();
        return $reviews;
    }


    public function getEditMyReview($id)
    {
        $user = Auth::user();
        $review = Review::where('user_id', $user->id)->where('id', $id)->first();

        if (!$review) {
            return response()->json(['error' => 'Review not found'], 404);
        }

        $review->update([
            'comment' => request('comment'),
            'rating' => request('rating'),
        ]);

        return $review;
    }

    public function getDeleteMyReview($id)
    {
        $user = Auth::user();
        $review = Review::where('user_id', $user->id)->where('id', $id);

        $review->delete();
        return $review;
    }
}
