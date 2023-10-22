<?php

declare(strict_types=1);

namespace App\Classes;

class Home
{
    public function index()
    {
        echo '<pre>';
        var_dump($_GET);
        echo '</pre>';

        echo '<pre>';
        var_dump($_POST);
        echo '</pre>';

        return '<form action="/?foo=bar" method="post">
        <label>AMOUNT</label>
        <input type="text" name="amount/>"
        </form>';
    }
}
