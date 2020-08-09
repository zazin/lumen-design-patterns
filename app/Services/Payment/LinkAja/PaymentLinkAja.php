<?php


namespace App\Services\Payment\LinkAja;


use App\Services\Payment\IPayment;
use Illuminate\Support\Facades\Log;

class PaymentLinkAja implements IPayment
{
    const NAME = 'LINKAJA';
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
