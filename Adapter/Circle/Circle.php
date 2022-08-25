<?php

namespace App\Adapter\Circle;

class Circle
{
    public function getCircleArea(int $diagonal): int
    {
        $area = (M_PI * $diagonal**2)/4;
        return $area;
    }

}
