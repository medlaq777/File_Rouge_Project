<?php

namespace App\Services;

use App\Models\Payment;
use Stripe\Stripe;
use Stripe\Charge;

class PaymentService
{
    public function showPaymentForm()
    {
        return view('');
    }

}
