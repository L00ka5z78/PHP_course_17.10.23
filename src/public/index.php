<?php

use App\App;
use App\Invoice;
use App\InvoiceCollection;
use App\Customer;
use App\Exceptions\RouteNotFoundException;
use Ramsey\Uuid\Exception\InvalidBytesException;
use App\Router;
use App\Config;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

define('VIEW_PATH', __DIR__ . '/../views');
define('STORAGE_PATH', __DIR__ . '/../storage');

$router = new Router();

$router
    ->get('/', [App\Classes\HomeController::class, 'index'])
    ->get('/download', [App\Controllers\HomeController::class, 'download'])
    ->post('/upload', [App\Classes\HomeController::class, 'upload'])
    ->post('/invoices/create', [App\Classes\InvoiceController::class, 'store'])
    ->get('/invoices', App\Classes\InvoiceController::class, 'index')
    ->get('/invoices/create', App\Classes\InvoiceController::class, 'create');
(new App(
    $router,
    ['uri' => $_SERVER['REQUEST_URI'], 'method' => $_SERVER['REQUEST_METHOD']],
    new Config($_ENV)
))->run();
