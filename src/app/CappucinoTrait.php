<?php

declare(strict_types=1);

namespace App;

trait CappucinoTrait
{
    public function makeCappuccino()
    {
        echo static::class . ' is making Cappuccino' . PHP_EOL;
    }
}
