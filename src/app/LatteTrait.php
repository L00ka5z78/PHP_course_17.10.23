<?php

declare(strict_types=1);

namespace App;

trait LatteTrait
{
    protected string $milkType = 'whole-milk';
    public function makeLatte()
    {
        echo static::class . ' is making Latte with ' . $this->getMilkType() . PHP_EOL;
    }

    public function getMilkType(): string
    {
        if (property_exists($this, 'milk-type')) {
            return $this->milkType;
        }
        return '';
    }
}
