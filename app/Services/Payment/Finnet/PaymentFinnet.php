<?php


namespace App\Services\Payment\Finnet;


use App\Services\Payment\IPayment;
use Illuminate\Support\Facades\Log;

class PaymentFinnet implements IPayment
{
    const NAME = 'FINNET';
    const SECRET = 'FN';

    public function __construct()
    {
        Log::info('payment', ['type' => self::NAME]);
    }

    public function generateSignature(): string
    {
        return md5(self::SECRET);
    }

    public function pay(): array
    {
        return [
            'status' => '00',
            'message' => 'Success',
        ];
    }
}
