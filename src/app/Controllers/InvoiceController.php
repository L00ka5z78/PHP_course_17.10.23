<?php

declare(strict_types=1);

namespace App\Controllers;

class InvoiceController
{
    public function index(): string
    {
        unset($_SESSION['count']);
        var_dump($_SESSION);
        return 'Invoices';
    }

    public function create(): string
    {
        return '';
    }
    public function store()
    {
        $amount = $_POST['amount'];

        var_dump($amount);
    }
}
