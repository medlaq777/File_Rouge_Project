<?php

namespace App\Http\Controllers;
use App\Services\ArtistService;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    private $artistService;
    public function __construct(ArtistService $artistService)
    {
        $this->artistService = $artistService;
    }
    public function index()
    {
        $MytotalBookings = $this->artistService->getMyTotalBookings();
        $upcomingBookings = $this->artistService->getMyUpcomingBookings();
        $favoriteStudios = $this->artistService->getMyFavoriteStudios();
        $recentlyViewedStudios = $this->artistService->getRecentlyViewedStudios();
        $myBookings = $this->artistService->getMyBookings();
        $myReviews = $this->artistService->getMyReviews();
        return view('Dashboard.Artist.index',compact(
            'MytotalBookings',
            'upcomingBookings',
            'favoriteStudios',
            'recentlyViewedStudios',
            'myBookings',
            'myReviews',
        ));
    }

    public function showBookStudios($id)
    {
        $borrow = $this->artistService->getBookingStudio($id);
        return view('Dashboard.Artist.book', compact('borrow'));
    }

    public function getEditMyReview(Request $request, $id)
    {
        $request->validate([
            'comment' => 'required|string|max:255',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $this->artistService->getEditMyReview($id, $request->all());
        return redirect()->back()->with('success', 'Review updated successfully.');

    }

    public function getDeleteMyReview($id)
    {
        $this->artistService->getDeleteMyReview($id);
        return redirect()->back()->with('success', 'Review deleted successfully.');
    }
}
