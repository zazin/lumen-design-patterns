<?php


namespace App\Http\Controllers;


use App\Services\Payment\PaymentService;

class PaymentController extends Controller
{
    public function payment(string $type)
    {
        switch ($type){
            case 'linkaja':
                return response()->json(PaymentService::linkAja(),200);
            case 'finnet':
            default:
                return response()->json(PaymentService::finnet(),200);
        }
    }
}
