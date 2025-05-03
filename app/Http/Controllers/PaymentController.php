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
        $startDate = $request->input('start_date');
        $endDate = $request->input('end_date');
        $userId = Auth::user()->id;
        $payment = $this->PaymentService->showPaymentForm($studioId, $totalPrice, $userId, $startDate, $endDate);
        return $payment;
    }

    public function processPayment(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'user_id' => 'required|integer',
            'total_price' => 'required|numeric',
            'studio_id' => 'required|integer',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after:startDate',

        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        return dd($this->PaymentService->processPayment($request->all()));
    }


}
