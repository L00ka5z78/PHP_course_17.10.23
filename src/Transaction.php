<?php

declare(strict_types=1);
//  *** **** **EXAMPES ********************************************
// class Transaction
// {
//     private float $amount;
//     private string $description;

//     public function __construct(float $amount, string $description)
//     {
//         $this->amount = $amount;
//         $this->description = $description;
//     }

//     public function addTax(float $rate): Transaction
//     {
//         $this->amount += $this->amount * $rate / 100;
//         return $this;
//     }

//     public function applyDiscount(float $rate): Transaction
//     {
//         $this->amount -= $this->amount * $rate / 100;
//         return $this;
//     }

//     public function getAmount(): float
//     {
//         return $this->amount;
//     }

//     public function __destruct()
//     {
//         echo 'Destruct ' . $this->description . '<br/>';
//     }
// }

class Transaction
{
    private ?Customer $customer = null;
    // constructor property promotion
    public function __construct(
        private float $amount,
        private string $description
    ) {
    }

    public function getCustomer(): ?Customer
    {
        return $this->customer;
    }
}
