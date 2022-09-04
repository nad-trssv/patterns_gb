<?php

namespace App\Lesson7;

use DirectoryIterator;

class Homework
{
    public function task_1($path)
    {
        //Написать аналог «Проводника» в Windows для директорий на сервере при помощи итераторов.
    
        $dir = new DirectoryIterator($path);
        foreach ($dir as $file) {
            echo $file.'<br>';
        }

    }

    public function task_2()
    {
        // Определить сложность следующих алгоритмов: 
            // 1. Поиск элемента массива с известным индексом
            $arr = [1,2,3,4,5];
            echo "Element: " . $arr[0] . "<br>";
            // Так как мы знаем конкретный индекс необходимого элемента массива, сложность алгоритма будет
            // равна O(1)

            // 2. Дублирование одномерного массива через foreach
            $arrDuplicate = array();
            foreach($arr as $key=>$value) // O(N)
            {
                echo $arrDuplicate[] = $value; // O(1)
            }
            // Итого: O(N) + O(1) = O(1 + N) = 0(N)
    }

    public function task_2_factorial($n) {
            // 3. Рекурсивная функция нахождения факториала числа
            if ($n <= 0) return 1;
            return $n * $this->task_2_factorial($n-1);
            // Сложность рекурсивных алгоритмов зависит не только от сложности внутренних циклов, но и от количества итераций рекурсии,
            // в итоге получим O(5N) и отбросив множитель получим сложность алгоитма равную O(N)
    }
        
}
