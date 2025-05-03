<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use App\Models\Booking;
use Stripe\PaymentIntent;
use Stripe\PaymentMethod;
use Stripe\Customer;
use Illuminate\Support\Facades\Auth;
class PaymentService
{
    public function showPaymentForm($studioId, $totalPrice, $userId, $startDate, $endDate)
    {
        return view('Dashboard.Artist.payment', compact('studioId', 'totalPrice', 'userId', 'startDate', 'endDate'));
    }

    public function processPayment(array $data)
{
    Stripe::setApiKey(config('services.stripe.secret'));
    $borrowing = Booking::create([
        'user_id' => $data['user_id'],
        'studio_id' => $data['studio_id'],
        'date' => date('Y-m-d', strtotime($data['startDate'])),
        'time' => time(),
        'total_price' => $data['total_price'],
    ]);

    $payment = Payment::create([
        'booking_id' => $borrowing->id,
        'studio_id' => $data['studio_id'],
        'user_id' => $data['user_id'],
        'total_price' => number_format((float)$data['total_price'] / 100, 2, '.', ''),
        'payment_date' => now()->format('Y-m-d H:i:s'),
        'transaction_id' => $data['payment_method'],
        'method' => 'stripe',
        'status' => 'pending',
    ]);

    $customer = Customer::create([
        'name' => $data['cardholder'],
    ]);
    PaymentMethod::retrieve($data['payment_method'])->attach([
        'customer' => $customer->id,
    ]);
        $paymentIntent = PaymentIntent::create([
            'amount' => $data['total_price'] * 100,
            'currency' => 'usd',
            'customer' => $customer->id,
            'payment_method' => $data['payment_method'],
            'off_session' => true,
            'confirm' => true,
            'description' => 'Payment for booking ID: ' . $borrowing->id,
            'automatic_payment_methods' => ['enabled' => true],
        ]);
    $payment = Payment::create([
        'booking_id' => $borrowing->id,
        'studio_id' => $data['studio_id'],
        'user_id' => $data['user_id'],
        'total_price' => number_format((float)$data['total_price'] / 100, 2, '.', ''),
        'payment_date' => now()->format('Y-m-d H:i:s'),
        'transaction_id' => $data['payment_method'],
        'method' => 'stripe',
    ]);
    if ($paymentIntent->status === 'succeeded') {
        $payment->markAsSuccessful();
        $borrowing->confirm();
        return redirect()->route('payment.success')->with('success', 'Payment successful!');
    } else {
        $payment->markAsFailed();
        return redirect()->back()->with('error', 'Payment failed. Please try again.');
    }

}



// public function paymentSuccess()
// {
//     if (!Auth::check()) {
//         return redirect()->route('login')->with('error', 'You must be logged in to view this page.');
//     }

//     $borrowing = Booking::where('user_id', Auth::user()->id)->latest()->first();

//     return dd($borrowing);
// }

}
