<?php

declare(strict_types=1);

namespace App;

use App\Exception\MissingBillingException;

class Invoice
{
    public string $id;

    public function __construct(public float $amount)
    {
        $this->id = random_int(10000, 999999);
    }
}
