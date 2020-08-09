<?php


class PaymentTest extends TestCase
{
    public function testPaymentLinkAja()
    {
        $this->get('payment/linkaja');
        $this->assertResponseStatus(200);
        $this->seeJsonStructure([
            'status',
            'message'
        ]);
        $this->seeJsonContains([
            'status' => '00'
        ]);
    }

    public function testPaymentFinnet()
    {
        $this->get('payment/finnet');
        $this->assertResponseStatus(200);
        $this->seeJsonStructure([
            'status',
            'message'
        ]);
        $this->seeJsonContains([
            'status' => '00'
        ]);
    }
}
