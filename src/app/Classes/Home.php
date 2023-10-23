<?php

declare(strict_types=1);

namespace App\Classes;

use App\View;

class Home
{
    public function index()
    {

        return <<<FORM
        <form action="/upload" method="post>
            <input type="file" name="receipt" />
            <button type="submit">Upload</button>
        </form>
        FORM;
    }
    public function upload()
    {
    }
}
