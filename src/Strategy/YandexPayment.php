<?php

namespace App\Strategy;

use App\Strategy\Handlers\ISortHandler;
use App\Strategy\Enum\PaymentType;

class YandexPayment implements ISortHandler
{
    public function __construct(string $price, string $phoneNumber){}

    public function canHandle(PaymentType $type): bool
    {
        return $type === PaymentType::YANDEX_PAYMENT;
    }

    public function send(string $price, string $phoneNumber):bool
    {
        echo 'Yandex |  Price: '.$price.' Phone: '.$phoneNumber;
        echo '<br>';
        return true;
    }
}
