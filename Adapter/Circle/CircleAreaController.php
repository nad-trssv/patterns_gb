<?php

namespace App\Adapter\Circle;

use App\Adapter\Handler;

class CircleAreaController
{
    public function circleArea(): void
    {
        $circleAdapter = new CircleAdapter((new Circle()));
        $circleHandler = new Handler($circleAdapter);
        
        $circleHandler->handle();
    }
}
