<?php

namespace App\Adapter\Square;

class Square
{
    public function getSquareArea(int $diagonal): int
    {
        $area = ($diagonal**2)/2;
        return $area;
    }
}
