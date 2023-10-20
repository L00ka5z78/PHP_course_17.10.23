<?php

use App\CollectionAgency;
use App\Rocky;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();

$invoice();
var_dump($invoice);
// echo $invoice;
