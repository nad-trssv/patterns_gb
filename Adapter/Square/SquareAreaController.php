<?php

namespace App\Adapter\Square;

use App\Adapter\Handler;

class SquareAreaController
{
    public function squareArea(): void{
        $squareAdapter = new SquareAdapter((new Square()));
        $squareHandeler = new Handler($squareAdapter);

        $squareHandeler->handle();
    }
}
