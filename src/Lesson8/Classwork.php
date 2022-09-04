<?php

namespace App\Lesson8;

use ArrayIterator;
use ArrayObject;
use DirectoryIterator;
use SplMaxHeap;
use SplMinHeap;
use SplPriorityQueue;
use SplStack;

class Classwork
{
    function ulesandeid()
    {
    // SplStack
    echo "\e[31mSplStack \e[0m \n";
    $stack = new SplStack();
        // Добавляем элемент в стек
    $stack->push('1');
    $stack->push('2');
    $stack->push('3');
    echo $stack->count(); // 3
    echo "\n";
    echo $stack->top(); // 3
    echo "\n";
    echo $stack->bottom(); // 1
    echo "\r\n";
    echo $stack->serialize(); // i:6;:s:1:"1";:s:1:"2";:s:1:"3";
    echo "\r\n";
        // Извлекаем элементы из стека
    echo $stack->pop(); // 3
    echo "\r\n";
    echo $stack->pop(); // 2
    echo "\r\n";
    echo $stack->pop(); // 1
    echo "\r\n";
    
    
    // SplMaxHeap
    echo "\e[31mSplMaxHeap \n \e[0m";
    $heap = new SplMaxHeap();
    $heap->insert("111      ");
    $heap->insert("222      ");
    $heap->insert("333      ");
    
    echo $heap->extract();
    echo $heap->extract();
    echo $heap->extract();
    echo "\r\n";
    
    // SplMinHeap
    echo "\e[31mSplMinHeap \n \e[0m";
    $heap = new SplMinHeap();
    $heap->insert("111      ");
    $heap->insert("222      ");
    $heap->insert("333      ");
    
    echo $heap->extract();
    echo $heap->extract();
    echo $heap->extract();
    echo "\r\n";
    
    
    // SplPriorityQueue
    echo "\e[31mSplPriorityQueue \n \e[0m";
    $queue = new SplPriorityQueue();
    $queue->setExtractFlags(SplPriorityQueue::EXTR_DATA);
    
    $queue->insert("q", 1);
    $queue->insert("y", 6);
    $queue->insert("e", 3);
    $queue->insert("w", 2);
    $queue->insert("r", 4);
    $queue->insert("t", 5);
    
    $queue->top();
    
    while($queue->valid())
    {
        echo $queue->current();
        $queue->next();
    }
    
    echo "\r\n";
    
    //ArrayIterator 1 viis
    echo "\e[31mArrayIterator 1 viis \e[0m \n";
    
    $arr = ["Moscow", "Munich", "Beijing", "Roma", "Barcelona", "London"];
    $obj = new ArrayObject( $arr );
    $iter = $obj->getIterator();
    // Цикл для обработки объекта
    while( $iter->valid() )
    {
    echo $iter->key() . " =  " . $iter->current() . "\n";
    $iter->next();
    }
    echo "\r\n";
    
    //ArrayIterator 2 viis
    echo "\e[31mArrayIterator 2 viis \e[0m \n";
    
    $arr = ["Moscow", "Munich", "Beijing", "Roma", "Barcelona", "London"];
    $col = new ArrayIterator($arr);
    
    foreach($col as $key=>$value)
    {
        echo $key . " =  " . $value . "\n";
    }
    echo "\r\n";
    
    //DirectoryIterator
    echo "\e[31mDirectoryIterator \e[0m \n";
    
    // Создаем новый объект DirectoryIterator
    $dir = new DirectoryIterator(__DIR__);
    // Цикл по содержанию директории
    foreach ($dir as $item) {
    echo $item . "\n";
    }
    
    echo "\r\n";
    
    //  SPL-функции
    
    // ● class_implements — возвращает список интерфейсов, реализованных в заданном классе или интерфейсе;
    // ● class_parents — возвращает список родительских классов заданного класса;
    // ● class_uses — возвращает список трейтов, используемых заданным классом;
    // ● iterator_apply — вызывает функцию для каждого элемента в итераторе;
    // ● iterator_count — подсчитывает количество элементов в итераторе;
    // ● iterator_to_array — копирует итератор в массив;
    // ● spl_autoload_call — попытка загрузить описание класса всеми зарегистрированными
    // методами __autoload();
    // ● spl_autoload_extensions — регистрация и вывод расширений файлов для spl_autoload;
    // ● spl_autoload_functions — получение списка всех зарегистрированных функций __autoload();
    // ● spl_autoload_register — регистрирует заданную функцию в качестве реализации метода
    // __autoload(). Это более предпочтительный вызов автозагрузчиков, активно используется во
    // многих каркасах;
    // ● spl_autoload_unregister — отмена регистрации функции в качестве реализации метода
    // __autoload();
    // ● spl_autoload — реализация по умолчанию метода __autoload();
    // ● spl_classes — возвращает доступные классы SPL;
    // ● spl_object_hash — возвращает хеш-идентификатор для объекта.
    }
        
}
