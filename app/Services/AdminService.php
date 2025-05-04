<?php

namespace App\Services;

use App\Models\Booking;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Studios;
use App\Models\Payment;
use App\Models\Feature;
class AdminService
{
    public function index()
    {
        $user = Auth::user()->isAdmin();
        $getAllUsers = User::all();
        $getAllUsersPagination = User::paginate(6);
        $getAllStudios = Studios::all();
        $getAllStudiosPagination = Studios::paginate(6);
        $getAllCategories = Category::paginate(6);
        $getAllFeatures = Feature::paginate(6);
        $getAllBookings = Booking::paginate(6)->where('status', '=', 'confirmed');
        $mounthlyBooking = Booking::whereMonth('created_at', date('m'))
            ->whereYear('created_at', date('Y'))
            ->where('status', '=', 'confirmed')
            ->count();

        $mounthlyRevenue = Payment::get()
            ->where('status', '=', 'Success')
            ->where('payment_date', '>=', now()->startOfMonth())
            ->sum('total_price');

        $allActivity = [
            'recentPayments' => Payment::where('status', '=', 'Success')
            ->where('payment_date', '>=', now()->subDays(30))
            ->orderBy('payment_date', 'desc')
            ->take(10)
            ->get(),
            'recentBookings' => Booking::where('created_at', '>=', now()->subDays(30))
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get(),
            'recentUsers' => User::where('created_at', '>=', now()->subDays(30))
            ->orderBy('created_at', 'desc')
            ->take(10)
            ->get(),
        ];

        $recentActivity = collect()
            ->merge($allActivity['recentPayments'])
            ->merge($allActivity['recentBookings'])
            ->merge($allActivity['recentUsers'])
            ->filter(function ($activity) {
                return $activity->created_at >= now()->subDays(30);
            })
            ->sortByDesc('created_at')
            ->take(10);
        $recentActivity = $recentActivity->map(function ($activity) {
            return [
                'type' => class_basename($activity),
                'data' => $activity,
            ];
        });
        $recentActivity = $recentActivity->values()->all();
        $recentActivity = collect($recentActivity)->sortByDesc('data.created_at')->take(10);



        return [
            'user' => $user,
            'getAllUsers' => $getAllUsers,
            'getAllUsersPagination' => $getAllUsersPagination,
            'getAllStudios' => $getAllStudios,
            'mounthlyBooking' => $mounthlyBooking,
            'mounthlyRevenue' => $mounthlyRevenue,
            'allActivity' => $recentActivity,
            'getAllStudiosPagination' => $getAllStudiosPagination,
            'getAllCategories' => $getAllCategories,
            'getAllFeatures' => $getAllFeatures,
            'getAllBookings' => $getAllBookings,
        ];
    }

}
