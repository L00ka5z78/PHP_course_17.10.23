<?php

use App\Invoice;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

set_exception_handler(function (\Exception $e) {
    var_dump($e->getMessage());
});

echo array_rand([], 1);

$invoice = new Invoice(new Customer());

$invoice->process(25);
