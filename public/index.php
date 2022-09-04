<?php

// use App\Strategy\Handlers\SortHandler;
// use App\Strategy\Enum\PaymentType;

use App\Lesson8\Homework;

require __DIR__.'/../vendor/autoload.php';

// $pay = new SortHandler();

// $pay->handle(PaymentType::QIWI_PAYMENT , '56$', '37255944520 ');
// $pay->handle(PaymentType::YANDEX_PAYMENT , '72.90$', '37255855025 ');
// $pay->handle(PaymentType::WEBMONEY_PAYMENT, '13.50$', '37255941000 ');

$cw7 = new Homework();

$cw7->task_1(__DIR__);
echo "<br>";

$cw7->task_2();
echo "<br><br>";

echo 'Factorial(5): ' . $cw7->task_2_factorial(5);
echo "<br>";




