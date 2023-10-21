<?php

declare(strict_types=1);

namespace App;

use Exception;

class Invoice
{
    private string $id;


    public function __construct(
        float $amount,
        string $description,
        string $creditCardNumber
    ) {
        $this->id = uniqid('invoice_');
    }

    public function __sleep(): array
    {
        return ['id', 'amount'];
    }
    public function __wakeup(): void
    {
    }
}
