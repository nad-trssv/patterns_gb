<?php

namespace App\Strategy\Handlers;

use App\Strategy\Enum\PaymentType;
use App\Strategy\QiwiPayment;
use App\Strategy\WebMoneyPayment;
use App\Strategy\YandexPayment;

class SortHandler
{

    public function handle(PaymentType $paymentType, string $price, string $phoneNumber):bool
    {
        $paymentMethods = [
            new QiwiPayment($price, $phoneNumber),
            new YandexPayment($price, $phoneNumber),
            new WebMoneyPayment($price, $phoneNumber),
        ];
        
        foreach($paymentMethods as $method)
        {
            if($method->canHandle($paymentType))
            {
                return $method->send($price, $phoneNumber);
            }
        }

    }

}
