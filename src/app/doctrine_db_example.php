<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\InvoiceStatus;
use DateTime;
use Dotenv\Dotenv;

require_once __DIR__ . '/../vendor/autoload.php';

$dotenv = Dotenv::createImmutable(dirname(__DIR__));
$dotenv->load();

$params = [
	'host' => $_ENV['DB_HOST'],
	'user' => $_ENV['DB_USER'],
	'password' => $_ENV['DB_PASS'],
	'dbname' => $_ENV['DB_DATABASE'],
	'driver' => $_ENV['DB_DRIVER'] ?? 'pdo_mysql',
];
$entityManager =  EntityManager::create($params, $setup::createAttributeMetadataConfiguration([__DIR__ . '/Entity']));

$queryBuilder = $entityManager->createQueryBuilder();

$query = $queryBuilder
	->select('i', 'it')
	->from(Invoice::class, 'i')->where('i.amount > :amount')
	->join('i.items', 'it')
	->where(
		$queryBuilder->expr()->andX(
			$queryBuilder->expr()->gt('i.amount', ':amount'),
			$queryBuilder->expr()->orX(
				$queryBuilder->expr()->eq('i.status', ':status'),
				$queryBuilder->expr()->gte('i.createdAt', ':date'),
			)
		)
	)
	->setParameter('amount', 100)
	->setParameter('status', InvoiceStatus::Paid->value)
	->orderBy('i.createdAt', 'desc')
	->getQuery();

$invoice = $query->getResult();

/** @var Invoice $invoice */
foreach ($invoices as $invoice) {
	echo $invoice->getCreatedAt()->format('m/d/Y g:ia')
		. ', ' . $item->getDescription()
		. ', ' . $item->getQuantity()
		. ', ' . $item->getUnitPrice() . PHP_EOL;
}
