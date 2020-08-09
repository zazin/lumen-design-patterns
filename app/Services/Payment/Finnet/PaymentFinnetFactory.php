<?php


namespace App\Services\Payment\Finnet;


use App\Services\Payment\IPayment;
use App\Services\Payment\IPaymentFactory;

class PaymentFinnetFactory implements IPaymentFactory
{

    public function createPayment(): IPayment
    {
        return new PaymentFinnet();
    }
}
