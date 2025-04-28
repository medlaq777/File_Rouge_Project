<?php

namespace App\Http\Controllers;
use App\Services\ArtistService;



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
        return view('Dashboard.Artist.index',compact(
            'MytotalBookings',
            'upcomingBookings',
            'favoriteStudios',
            'recentlyViewedStudios',
            'myBookings'
        ));
    }
}
