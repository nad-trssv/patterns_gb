<?php

namespace App\Lesson9;

class QuickSort extends AbstractSort implements ISort
{
    public $execution_time;

    public function sort(array $elements): array
    {
        $timerOn = microtime(true);
        $left = $right = [];
        $count = count($elements);

        if($count <= 1)
        {
            return $elements;
        }
        
        $middle = $elements[ $count / 2 ]; 
        
        for($i = 1; $i < $count; $i++)
        {
            if($elements[$i] < $middle)
            {
                $left[] = $elements[$i];
            }
            else
            {
                $right[] = $elements[$i];
            }
        }

        $left = $this->sort($left);
        $right = $this->sort($right);

        //timer
        $timerOff = microtime(true);
        $this->execution_time = ($timerOff - $timerOn);

        return array_merge($left, [$middle], $right);
    }

    public function getTimout()
    {
        return $this->execution_time;
    }
}
