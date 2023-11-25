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

$builder = $conn->createQueryBuilder();

$invoices = $builder
	->select('id', 'amount')
	->from('invoices')
	->where('amount > ?')
	->setParameter(0, 6000)
	->fetchAllAssociative();
var_dump($invoices);
