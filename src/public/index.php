<?php

use App\Invoice;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$date = '05/12/2022 3:30PM';

$dateTime = new DateTime($date);
$dateTime = DateTime::createFromFormat('d/m/Y g:iA', $date);
$dateTime = DateTime::createFromFormat('d/m/Y', $date)->setTime(0, 0);

// d/m/y - europe
//m/d/y - usa


// $dateTime = new DateTime('05/12/2022 3:30PM', new DateTimeZone('Europe/Amsterdam'));




// echo $dateTime->getTimezone()->getName() . ' ' . $dateTime->format('m/d/Y g:i A') . PHP_EOL;

// // var_dump($dateTime);

// $dateTime->setTimezone(new DateTimeZone('Europe/Amsterdam'));
// $dateTime->setDate(2023, 10, 21)->setTime(2, 16);

// echo $dateTime->format('m/d/Y g:i A') . PHP_EOL;

var_dump($dateTime);
