<?php

namespace App\Strategy\Handlers;

use App\Strategy\Enum\PaymentType;

interface ISortHandler
{
    public function canHandle(PaymentType $type): bool;
}
