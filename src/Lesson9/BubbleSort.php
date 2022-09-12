<?php

namespace App\Lesson9;

class BubbleSort extends AbstractSort implements IBubbleSort
{
    public $execution_time;

    public function sort(array $elements): array
    {
        $timerOn = microtime(true);

        $count = count($elements);

        for($i = 0; $i < count($elements); $i++){
            for($j = $i + 1; $j < $count; $j++){
                if($elements[$i] > $elements[$j]){
                    $elements = $this->swap($elements, $i, $j);
                }
            }
        }

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
