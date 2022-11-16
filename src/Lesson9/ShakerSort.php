<?php

namespace App\Lesson9;

class ShakerSort extends AbstractSort implements ISort
{
    public $execution_time;
    
    public function sort(array $elements): array 
    {
        $timerOn = microtime(true);

        $count = count($elements);
        $left = 0;
        $right = $count - 1;

        do {
            for ($i = $left; $i < $right; $i++) {
                if ($elements[$i] > $elements[$i + 1]) {
                    $this->swap($elements, $i, $i + 1);
                }
            }
            $right--;

            for ($i = $right; $i > $left; $i--) {
                if ($elements[$i] < $elements[$i - 1]) {
                    $this->swap($elements, $i, $i - 1);
                }
            }
            $left++;

        }while ($left <= $right);

        //timer
        $timerOff = microtime(true);
        $this->execution_time = ($timerOff - $timerOn);

        return $elements;
    }

    public function getTimout()
    {
        return $this->execution_time;
    }
}
