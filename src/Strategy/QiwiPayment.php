<?php

namespace App\Strategy;

use App\Strategy\Handlers\ISortHandler;
use App\Strategy\Enum\PaymentType;

class QiwiPayment implements ISortHandler
{
    public function canHandle(PaymentType $type): bool
    {
        return $type === PaymentType::QIWI_PAYMENT;
    }

    public function send(string $price, string $phoneNumber):bool
    {
        echo 'Qiwi |  Price: '.$price.' Phone: '.$phoneNumber;
        echo '<br>';
        return true;
    }

}
