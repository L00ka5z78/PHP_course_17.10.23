<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    private string $id;

    public function __construct()
    {
        $this->id = uniqid('invoice_');
    }
}
