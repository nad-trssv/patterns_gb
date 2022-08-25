<?php

namespace App\Adapter\Square;

use App\Adapter\AreaInterface;

class SquareAdapter implements AreaInterface
{
    public function __construct(private Square $square){}

    public function getArea(int $areaNumber): void
    {
        $this->square->getSquareArea($areaNumber);
    }

}
