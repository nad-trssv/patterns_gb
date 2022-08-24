<?php

namespace App\Adapter;

use App\Adapter\AreaInterface;

class Handler
{
    public function __construct(private AreaInterface $areaNumber){}

    public function handle()
    {
        $number = '5';
        $this->areaNumber->getArea($number);
    }

}
