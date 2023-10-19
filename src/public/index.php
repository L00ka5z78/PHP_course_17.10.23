<?php

declare(strict_types=1);

require_once '../PaymentGateway/Stripe/Transaction.php';
require_once '../PaymentGateway/Paddle/Transaction.php';
require_once '../PaymentGateway/Paddle/CustomerProfile.php';

use PaymentGateway\Paddle\{CustomerProfile, Transaction};
use PaymentGateway\Stripe\Transaction as StripeTransactiion;

$paddleTransaction = new Transaction();
$stripeTransaction = new StripeTransactiion();
$paddleCustomerProfile = new CustomerProfile();

var_dump($paddleTransaction, $paddleCustomerProfile, $stripeTransaction);


// var_dump(new PaymentGateway\Stripe\Transaction());
