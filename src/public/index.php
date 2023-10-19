<?php

declare(strict_types=1);


require_once '../PaymentProfile.php';
require_once '../Customer.php';
require_once '../Transaction.php';

// clssses and objects

// here (..) comes values from class constructor
// $transaction = new Transaction(100, 'transaction 1');
// $transaction->addTax(8)->applyDiscount(10);

// $amount = (new Transaction(100, 'transaction 1'));
// ->addTax(8)
// ->applyDiscount(10)
// ->getAmount();

// var_dump($amount);

$transaction = new Transaction(5, "test");

// $transaction->customer = new Customer();

echo $transaction->getCustomer()->getPaymentProfile()->id ?? 'foo';
