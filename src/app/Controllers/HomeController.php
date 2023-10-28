<?php

declare(strict_types=1);

namespace App\Controllers;

use App\View;
use PDO;
use PDOException;

class HomeController
{
    public function index(): View
    {
        try {
            $db = new PDO('mysql:host=localhost;dbname=my_db', 'root', 'root', [
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ
            ]);
            $email = 'abc@ex.con';
            $name = 'jane doe';
            $isActive = 1;
            $createdAt = date('Y-m-d H:m:i', strtotime('07/11/2021 9:00'));
            $query = "INSERT INTO users (email, full_name, is_active, creaated_at) VALUES (?, ?, ?, ?)";

            $stmt = $db->prepare($query);
            $stmt->execute([$email, $name, $isActive, $createdAt]);
            $id = (int) $db->lastInsertId();
            $user = $db->query("SELECT * FROM user WHERE id = " . $id);
            foreach ($db->query($query) as $user) {
                echo '<pre>';
                var_dump($user);
                echo '</pre>';
            }
        } catch (\PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }
        var_dump($db);
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
