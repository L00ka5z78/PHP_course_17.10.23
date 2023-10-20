<?php

use App\CollectionAgency;
use App\Rocky;

require __DIR__ . '/../vendor/autoload.php';

$invoice = new App\Invoice();


var_dump(isset($invoice->amount));
var_dump($invoice);
