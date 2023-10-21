<?php

use App\Invoice;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$dateTime1 = new DateTime('05/25/2021 9:15 AM');
$dateTime2 = new DateTime('05/25/2021 9:14 AM');

var_dump($dateTime1 < $dateTime2);
var_dump($dateTime1 > $dateTime2);
var_dump($dateTime1 == $dateTime2);
var_dump($dateTime1 <=> $dateTime2);

var_dump($dateTime1->diff($dateTime2));

$from = new DateTime();
$to = (new DateTime())->add(new DateInterval('P1M'));

echo $from->format('m/d/Y') . ' - ' . $to->format('m/d/Y') . PHP_EOL;
