<?php

declare(strict_types=1);


//changing \ into / lower case letter first and right directory
spl_autoload_register(function ($path) {
    $path = __DIR__ . '/../' . lcfirst(str_replace('\\', '/', $path)) . '.php';
});

use App\PaymentGateway\Paddle\Transaction;


$paddleTransaction = new Transaction();

var_dump($paddleTransaction);
