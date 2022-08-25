<?php

namespace App\Adapter\Circle;

use App\Adapter\AreaInterface;

class CircleAdapter implements AreaInterface
{
    public function __construct(private Circle $circle){}

    public function getArea(int $areaNumber): void
    {
        $this->circle->getCircleArea($areaNumber);
    }

}
