<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index()
    {

        return <<<FORM
   
        FORM;
    }
    public function upload()
    {
        echo '<pre>';
        var_dump($_FILES);

        var_dump(pathinfo($_FILES['receipt']['tmp_name']));
        echo '</pre>';

        $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

        move_uploaded_file(
            $_FILES['receipt']['tmp_name'],
            STORAGE_PATH . '/' . $_FILES['receipt']['name'],
            $filePath
        );

        echo '<pre>';
        var_dump(pathinfo($filePath));
        echo '</pre>';
    }
}
