<?php

declare(strict_types=1);

namespace App;


class Invoice
{
    private string $id;

    public function __construct(
        public Customer $customer
    ) {
    }

    public function process(float $amount): void
    {
        echo 'Processing $' . $amount . ' invoice - ';

        sleep(1);

        echo 'OKI' . PHP_EOL;
    }
}
