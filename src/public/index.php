<?php

use App\CollectionAgency;
use App\Rocky;

require __DIR__ . '/../vendor/autoload.php';

$service = new \App\DebtCollectionService();

echo $service->collectDebt(new Rocky()) . PHP_EOL;
