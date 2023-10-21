<?php

use App\Invoice;
use App\InvoiceCollection;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

foreach (new App\Invoice(25) as $key => $value) {
    echo $key . ' = ' . $value . PHP_EOL;
}

$invoiceCollection = new InvoiceCollection([new \App\Invoice(15), new App\Invoice(25), new App\Invoice(50)]);


foreach ($invoiceCollection as $invoice) {
    echo $invoice->id . ' - ' . $invoice->amount . PHP_EOL;
}
