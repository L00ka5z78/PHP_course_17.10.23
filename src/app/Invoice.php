<?php

declare(strict_types=1);

namespace App;

class Invoice
{
    //     public function __toString()
    //     {
    //         return "hello";
    //     }


    // public function __inwoke()  // when we try to inwoke object directly
    // {
    //     var_dump('inwoked');
    // }

    private float $amount;
    private int $id = 1;
    private string $accountNumber = '45765854563';

    public function __debugInfo(): ?array
    {
        return [
            'id' => $this->id,
            'accountNumber' => '****' . substr($this->accountNumber, -4),
        ];
    }
}
