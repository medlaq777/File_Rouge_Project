<?php

namespace App\Services;

use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentService
{
    public function showPaymentForm()
    {
        return view('payment.form');
    }

    public function processPayment(Request $request)
    {
        Stripe::setApiKey(config('services.stripe.secret'));

        try {
            $payment = Payment::create([
                'booking_id' => $request->input('booking_id'),
                'user_id' => $request->input('user_id'),
                'total_price' => $request->input('total_price'),
                'payment_date' => now(),
                'transaction_id' => uniqid(),
                'method' => 'Stripe',
                'status' => 'Pending',
            ]);

            // Handle successful payment
            return redirect()->route('payment.success');

        } catch (\Exception $e) {
            return back()->withErrors(['error' => $e->getMessage()]);
        }
    }

    public function paymentSuccess()
    {
        return view('payment.success');
    }

}
