<?php

use App\Invoice;
use App\CustomInvoice;
// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$invoice = new Invoice();

// echo serialize(true) . PHP_EOL;
// echo serialize(1) . PHP_EOL;
// echo serialize(2.25) . PHP_EOL;
// echo serialize('hello world') . PHP_EOL;
// echo serialize(['a' => 1, 'b' => 2, 'c' => 3]) . PHP_EOL;

// var_dump(unserialize(serialize(['a' => 1, 'b' => 2, 'c' => 3])));

echo serialize($invoice) . PHP_EOL;
