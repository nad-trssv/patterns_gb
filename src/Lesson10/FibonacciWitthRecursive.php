<?php

namespace App\Lesson10;

class FibonacciWitthRecursive
{
    public function getFibonacci(int $num)
    {
        if($num === 0) return 0;   
        if($num === 1) return 1;
        
        return $this->getFibonacci($num - 1) + $this->getFibonacci($num - 2);
    }

    public function getFibonacciFast(int $num)
    {
        $fibArr = [];
        $fibArr[0] = 0;
        $fibArr[1] = 1;

        for($i = 2; $i < $num; $i++)
        {
            $fibArr[$i] = $fibArr[$i - 1] + $fibArr[$i - 2];
        }

        return end($fibArr);
    }
}
