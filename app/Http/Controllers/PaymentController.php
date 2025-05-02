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

    public function showPaymentForm()
    {
        return $this->PaymentService->showPaymentForm();
    }


}
