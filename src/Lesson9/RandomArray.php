<?php

namespace App\Lesson9;

class RandomArray
{
    public function create(): array
    {
        $max = 1000;
        $array = [];
        for($i = 0; $i < $max; $i++)
        {
            $rnd = rand(1,500);
            array_push($array, $rnd);
        }

        return $array;
    }
}
