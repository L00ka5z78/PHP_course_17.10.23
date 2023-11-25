<?php

declare(strict_types=1);

namespace App\Models;

use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$connectionParams = [
	'dbname'   => $_ENV['DB_DATABASE'],
	'user'     =>  $_ENV['DB_USER'],
	'password' => $_ENV['DB_PASS'],
	'driver'   => $_ENV['DB_DRIVER'] ?? 'pdo_mysql'
];

$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams);

$schema = $conn->createSchemaManager();
var_dump($schema->listTableNames());
