<?php

use App\Invoice;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(new Customer());

try {
    $invoice->process(25);
} catch (\App\Exception\MissingBillingException | InvalidBytesException $e) {
    echo $e->getMessage() . PHP_EOL;
} finally {
    echo 'Finally block' . PHP_EOL;
}
