<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home
{
    public function index()
    {
        setcookie(
            'userName',
            'Gio',
            time() + 10,
            '/',
            '',
            false,
            false
        );
        return View::make('index', $_GET)->render();
    }
}
