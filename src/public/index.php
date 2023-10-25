<?php

use App\Invoice;
use App\InvoiceCollection;
use App\Customer;
use App\Exceptions\RouteNotFoundException;
use Ramsey\Uuid\Exception\InvalidBytesException;
use App\View;

// namespace App; // when i use this, dont need to write App in the path 

require __DIR__ . '/../vendor/autoload.php';
session_start();

define('VIEW_PATH', __DIR__ . '/../views');
define('STORAGE_PATH', __DIR__ . '/../storage');

$router = new App\Router();
try {

    $router
        ->get('/', [App\Classes\HomeController::class, 'index'])
        ->get('/download', [App\Controllers\HomeController::class, 'download'])
        ->post('/upload', [App\Classes\HomeController::class, 'upload'])
        ->post('/invoices/create', [App\Classes\InvoiceController::class, 'store'])
        ->get('/invoices', App\Classes\InvoiceController::class, 'index')
        ->get('/invoices/create', App\Classes\InvoiceController::class, 'create');




    echo $router->resolve($_SERVER['REQUEST_URI'], strtolower($_SERVER['REQUEST_METHOD']));
} catch (RouteNotFoundException $e) {
    // header('HTTP/1.1 404 Not Found');
    http_response_code(404);
    echo View::make('error/404');
}
var_dump($_SESSION);
var_dump($_COOKIE);
