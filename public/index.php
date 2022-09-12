<?php

// use App\Strategy\Handlers\SortHandler;
// use App\Strategy\Enum\PaymentType;

use App\Lesson10\FibonacciWitthRecursive;
use App\Lesson8\Homework;
use App\Lesson9\BubbleSort;
use App\Lesson9\Heapify;
use App\Lesson9\QuickSort;
use App\Lesson9\RandomArray;
use App\Lesson9\ShakerSort;

require __DIR__.'/../vendor/autoload.php';

// $pay = new SortHandler();

// $pay->handle(PaymentType::QIWI_PAYMENT , '56$', '37255944520 ');
// $pay->handle(PaymentType::YANDEX_PAYMENT , '72.90$', '37255855025 ');
// $pay->handle(PaymentType::WEBMONEY_PAYMENT, '13.50$', '37255941000 ');

// $cw7 = new Homework();

// $cw7->task_1(__DIR__);
// echo "<br>";

// $cw7->task_2();
// echo "<br><br>";

// echo 'Factorial(5): ' . $cw7->task_2_factorial(5);
// echo "<br>";


/* ========= Homework 9 ========== */
// $randomArray = new RandomArray();
// $bubbleSort = new BubbleSort();
// $shakerSort = new ShakerSort();
// $quickSort = new QuickSort();

// $bubbleSort->sort($randomArray->create());
// $shakerSort->sort($randomArray->create());
// $quickSort->sort($randomArray->create());

// $bubbleTimeout = $bubbleSort->getTimout();
// $shakerTimeout = $shakerSort->getTimout();
// $quickTimeout = $quickSort->getTimout();

// print_r('Bubble Sort Timeout: ' . $bubbleTimeout . PHP_EOL);
// print_r('Shaker Sort Timeout: ' . $shakerTimeout . PHP_EOL);
// print_r('Quick Sort Timeout: ' . $quickTimeout . PHP_EOL);

// $timeoutArr = [
//     [
//         'сортировка пузырьком',
//         $bubbleTimeout
//     ], 
//     [
//         'Шейкерная сортировка',
//         $shakerTimeout
//     ], 
//     [
//         'Быстрая сортировка',
//         $quickTimeout
//     ], 
// ];
// print_r('Быстрее всего сработал метод: ' . $quickSort->sort($timeoutArr)[0][0]. ' :) ');

// LESSON 10
$fib = new FibonacciWitthRecursive();
var_dump($fib->getFibonacci(10));
var_dump($fib->getFibonacciFast(100));


