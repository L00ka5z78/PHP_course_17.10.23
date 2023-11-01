<?php

declare(strict_types=1);

namespace App\Controllers;

use App\App;
use App\View;
use PDO;
use PDOException;
use App\Models\Invoice;
use App\Models\User;
use App\Models\SignUp;

class HomeController
{
    public function index(): View
    {
        $email = 'abc@ex.con';
        $name = 'jane doe';
        $amount = 25;

        $userModel    = new User();
        $invoiceModel = new Invoice();

        $invoiceId = (new SignUp($userModel, $invoiceModel))->register(
            [
                'email' => $email,
                'name' => $name,
            ],
            [
                'amount' => $amount,
            ]
        );

        return View::make('index', ['invoice' => $invoiceModel->find($invoiceId)]);
    }
}
