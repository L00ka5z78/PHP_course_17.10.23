<?php

use App\Invoice;
use App\Customer;
// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice(new Customer());

$invoice->process(25);
