<?php

require __DIR__ . '/../vendor/autoload.php';

use App\PaymentGateway\Paddle\Transaction;
use Ramsey\Uuid\UuidFactory;    // *********** if using this

$paddleTransaction = new Transaction();


$id = new \Ramsey\Uuid\UuidFactory();

// $id = new UuidFactory(); //  do this *******************
// echo $id->uuid4();
var_dump($id->uuid4());

var_dump($paddleTransaction);
