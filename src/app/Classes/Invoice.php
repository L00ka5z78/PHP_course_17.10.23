<?php

declare(strict_types=1);

namespace App;

use App\Exception\MissingBillingException;

class Invoice
{
    public string $id;

    public function index(): string
    {
        return 'Invoices';
    }

    public function create(): string
    {
        return 'CRETE Invoice';
    }
}
