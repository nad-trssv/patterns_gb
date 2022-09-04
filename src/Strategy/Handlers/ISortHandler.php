<?php

namespace App\Strategy\Handlers;

use App\Strategy\Enum\PaymentType;

interface ISortHandler
{
    public function handle(PaymentType $paymentType, string $price, string $phoneNumber):bool;
}
