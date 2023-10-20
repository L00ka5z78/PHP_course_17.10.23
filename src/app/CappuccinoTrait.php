<?php

declare(strict_types=1);

namespace App;

trait CappuccinoTrait
{
    use LatteTrait;

    private function makeCappuccino()
    {
        echo static::class . ' is making Cappuccino' . PHP_EOL;
    }
}
