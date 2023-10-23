<?php

use App\Invoice;
use App\InvoiceCollection;
use App\Customer;
use Ramsey\Uuid\Exception\InvalidBytesException;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';
session_start();

define('STORAGE_PATH', __DIR__ . '/../storage');

$router = new App\Router();

$router
    ->get('/', [App\Classes\HomeController::class, 'index'])
    ->post('/upload', [App\Classes\HomeController::class, 'upload'])
    ->post('/invoices/create', [App\Classes\InvoiceController::class, 'store'])
    ->get('/invoices', App\Classes\InvoiceController::class, 'index')
    ->get('/invoices/create', App\Classes\InvoiceController::class, 'create');
// ->register('/', [App\Classes\Home::class, 'index'])
// ->register('/invoices', App\Classes\Invoice::class, 'index')
// ->register('/invoices/create', App\Classes\Invoice::class, 'create');



echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));

var_dump($_SESSION);
var_dump($_COOKIE);
