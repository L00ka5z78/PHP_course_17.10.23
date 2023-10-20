<?php

declare(strict_types=1);

namespace App;

trait CappuccinoTrait
{

    private function makeCappuccino()
    {
        echo static::class . ' is making Cappuccino' . PHP_EOL;
    }
}
