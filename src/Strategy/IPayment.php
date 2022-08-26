<?php

namespace App\Strategy;

use App\Strategy\Enum\PaymentType;

interface IPayment
{
    public function canHandle(PaymentType $type): bool;
    public function send(string $price, string $phoneNumber):bool;

}
