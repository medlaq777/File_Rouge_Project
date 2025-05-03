<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Booking;

class PaymentService
{
    public function showPaymentForm($studioId, $totalPrice, $userId, $startDate, $endDate)
    {
        return view('Dashboard.Artist.payment', compact('studioId', 'totalPrice', 'userId', 'startDate', 'endDate'));
    }

    public function processPayment(array $data)
    {
        Stripe::setApiKey(config('services.stripe.secret'));
        $borrowing = booking::create([
            'studio_id' => $data['studio_id'],
            'user_id' => $data['user_id'],
            'start_date' => $data['startDate'],
            'end_date' => $data['endDate'],
            'total_price' => $data['total_price'],
            'status' => 'pending',
        ]);
        return $borrowing;

    }


    // public function paymentSuccess()
    // {
    //     return view('payment.success');
    // }

}
