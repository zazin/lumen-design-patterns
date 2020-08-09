<?php


namespace App\Services\Payment\LinkAja;


use App\Services\Payment\IPayment;
use App\Services\Payment\IPaymentFactory;

class PaymentLinkAjaFactory implements IPaymentFactory
{

    public function createPayment(): IPayment
    {
        return new PaymentLinkAja();
    }
}
