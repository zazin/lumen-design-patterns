<?php


namespace App\Services\Payment;


use App\Services\Payment\Finnet\PaymentFinnetFactory;
use App\Services\Payment\LinkAja\PaymentLinkAjaFactory;

class PaymentService
{
    public static function linkAja()
    {
        $paymentFactory = new PaymentLinkAjaFactory();
        return $paymentFactory->createPayment()->pay();
    }

    public static function finnet()
    {
        $paymentFactory = new PaymentFinnetFactory();
        return $paymentFactory->createPayment()->pay();
    }
}
