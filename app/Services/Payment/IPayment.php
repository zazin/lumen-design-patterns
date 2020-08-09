<?php


namespace App\Services\Payment;


interface IPayment
{
    public function generateSignature(): string;
    public function pay(): array;
}
