<?php

declare(strict_types=1);

namespace App;

trait LatteTrait
{
    public function makeLatte()
    {
        echo static::class . ' is making Latte' . PHP_EOL;
    }
}
