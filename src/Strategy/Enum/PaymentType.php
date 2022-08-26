<?php

namespace App\Strategy\Enum;

enum PaymentType: string 
{
        case QIWI_PAYMENT = 'Qiwi';
        case YANDEX_PAYMENT = 'Yandex';
        case WEBMONEY_PAYMENT = 'WebMoney';
}
