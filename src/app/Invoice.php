<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    public function __call(string $name, array $arguments)
    {
        var_dump($name, $arguments);
    }

    public static function __callStatic(string $name, array $arguments)
    {
        var_dump('static', $name, $arguments);
    }
}
