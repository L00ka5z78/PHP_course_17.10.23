<?php

declare(strict_types=1);

namespace App;

use App\Exception\MissingBillingException;

class Invoice
{
    private string $id;

    public function __construct(
        public Customer $customer
    ) {
    }

    public function process(float $amount): void
    {
        if ($amount <= 0) {
            throw new \InvalidArgumentException('INVALID INVOICE amount');
        }

        if (empty($this->customer->getBillingInfo())) {
            throw new MissingBillingException();
        }
        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OKI' . PHP_EOL;
    }
}
