<?php

use App\Strategy\Handlers\SortHandler;
use App\Strategy\Enum\PaymentType;

require __DIR__.'/../vendor/autoload.php';

$pay = new SortHandler();

$pay->handle(PaymentType::QIWI_PAYMENT , '56$', '37255944520 ');
$pay->handle(PaymentType::YANDEX_PAYMENT , '72.90$', '37255855025 ');
$pay->handle(PaymentType::WEBMONEY_PAYMENT, '13.50$', '37255941000 ');



