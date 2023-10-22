<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home
{
    public function index()
    {
        $_SESSION['count'] = $_SESSION['count'] + 1;

        return View::make('index', $_GET)->render();
    }
}
