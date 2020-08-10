<?php


namespace App\Services\Payment\Ovo;


use App\Services\Payment\IPayment;
use Illuminate\Support\Facades\Log;

class PaymentOvo implements IPayment
{
    const NAME = 'OVO';
    const SECRET = 'LA';

    public function __construct()
    {
        Log::info('payment', ['type' => self::NAME]);
    }

    public function generateSignature(): string
    {
        return sha1(self::SECRET);
    }

    public function pay(): array
    {
        return [
            'status' => '00',
            'message' => 'Success',
        ];
    }
}
