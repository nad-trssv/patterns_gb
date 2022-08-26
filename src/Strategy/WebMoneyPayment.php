<?php

namespace App\Strategy;

use App\Strategy\Handlers\ISortHandler;
use App\Strategy\Enum\PaymentType;

class WebMoneyPayment implements ISortHandler
{
    public function __construct(string $price, string $phoneNumber){}

    public function canHandle(PaymentType $type): bool
    {
        return $type === PaymentType::WEBMONEY_PAYMENT;
    }

    public function send(string $price, string $phoneNumber):bool
    {
        echo 'WebMoney |  Price: '.$price.' Phone: '.$phoneNumber;
        echo '<br>';
        return true;
    }
}
