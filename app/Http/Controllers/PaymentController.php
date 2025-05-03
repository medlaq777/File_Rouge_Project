<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Services\PaymentService;



class PaymentController extends Controller
{
    protected $PaymentService;

    public function __construct(PaymentService $paymentService)
    {
        $this->PaymentService = $paymentService;
    }

    public function showPaymentForm(Request $request)
    {
        $studioId = $request->input('studio_id');
        $totalPrice = $request->input('totalPrice');
        $userId = Auth::user()->id;
        $payment = $this->PaymentService->showPaymentForm($studioId, $totalPrice, $userId);
        return $payment;
    }

    public function processPayment(Request $request)
    {
        return $this->PaymentService->processPayment($request);
    }


}
