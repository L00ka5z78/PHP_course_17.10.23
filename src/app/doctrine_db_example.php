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


$items = [['Item 1', 1, 15], ['Item 2', 2, 7.5], ['Item 3', 4, 3.75]];

$invoice = (new \App\Entity\Invoice())
	->setAmount(45)
	->setInvoiceNumber('1')
	->setStatus(InvoiceStatus::Pending)
	->setCreatedAt(new DateTime());

foreach ($items as [$description, $quantity, $unitPrice]) {
	$item = (new \App\Entity\InvoiceItem())
		->setDescription($description)
		->setQuantity($quantity)
		->setUnitPrice($unitPrice);

	$invoice->addItem($item);
	$entityManager->persist($item);
}
$entityManager->persist($invoice);
$entityManager->flush();

$entityManager->remove($invoice);

$invoice->getItems()->get(0)->setDescription('FOOBar');


$entityManager->flush();

echo $entityManager->getUnitOfWork->size();
