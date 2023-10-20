<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    public float $amount;
    public function __get(string $name)
    {
        if (property_exists($this, $name)) {
            return $this->$name;
        }
        return null;
    }

    public function __set(string $name, $value): void
    {
        var_dump($name, $value);
    }
}
