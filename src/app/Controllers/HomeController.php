<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;

class HomeController
{
    public function index(): View
    {
        return  View::make('index');
    }

    public function download()
    {
        header('Content-Type: application/pdf');
        header('Content-Disposition: attachment;filename="myfile.pdf"');

        readfile(STORAGE_PATH . '/recepit 6-20-2021.pdf');
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
        header('Location: /');
        exit;
    }
}
