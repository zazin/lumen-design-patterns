<?php


namespace App\Services\Payment;


interface IPaymentFactory
{
    public function createPayment(): IPayment;
}
