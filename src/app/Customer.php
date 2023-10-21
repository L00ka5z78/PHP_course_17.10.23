<?php

declare(strict_types=1);

namespace App;

class Customer
{
    function __construct(public array $billingInfo = [])
    {
    }
    public function getBillingInfo(): array
    {
        return $this->billingInfo;
    }
}
