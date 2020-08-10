<?php


namespace App\Services\Payment\Ovo;


use App\Services\Payment\IPayment;
use App\Services\Payment\IPaymentFactory;

class PaymentOvoFactory implements IPaymentFactory
{

    public function createPayment(): IPayment
    {
        return new PaymentOvo();
    }
}
