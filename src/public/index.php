<?php

declare(strict_types=1);


require_once '../Transaction.php';

// clssses and objects

// here (..) comes values from class constructor
// $transaction = new Transaction(100, 'transaction 1');
// $transaction->addTax(8)->applyDiscount(10);

$amount = (new Transaction(100, 'transaction 1'))
    ->addTax(8)
    ->applyDiscount(10)
    ->getAmount();

var_dump($amount);
