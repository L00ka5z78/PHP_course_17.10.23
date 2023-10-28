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
        var_dump($_ENV['DB_HOST']);
        exit;
        try {
            $db = new PDO('mysql:host=' . $_ENV['DB_HOST'] . $_ENV['DB_DATABASE'], $_ENV['DB_USER'], $_ENV['DB_PASS']);
             
        } catch (\PDOException $e) {
            throw new PDOException($e->getMessage(), $e->getCode());
        }

        $email = 'abc@ex.con';
        $name = 'jane doe';
        $amount = 25;

        try {
        $db->beginTransaction();


        $newUserStmt = "INSERT INTO users (email, full_name, is_active, creaated_at) VALUES (?, ?, 1, NOW())";
        $newInvoiceStmt = $db->prepare(
            "INSERT INTO invoices (amount, user_id)
            VALUES (?, ?)"
        );

        $newUserStmt->execute([$email, $name]);

        $userId = (int)$db->lastInsertId();
 

        $newInvoiceStmt->execute([$amount, $userId]);
        $db->commit();

    } catch (\Throwable $e) {
        if ($db->inTransaction()) {
            $db->rollBack();
        }
        throw $e;
    }

        $fetchStmt = db->prepare{
            "SELECT invoices.id AS invoice_id, amount, user_id, full_name
            FROM invoices
            INNER JOIN users ON user_id = user.id
            WHERE email = ?"
        };
        $fetchStmt->execute[$email];

        echo '<pre>';
        var_dump($fetchStmt->fetch(PDO::FETCH_ASSOC));
        echo '</pre>';
        return View::mke('index');



    //     public function download()
    // {
    //     header('Content-Type: application/pdf');
    //     header('Content-Disposition: attachment;filename="myfile.pdf"');

    //     readfile(STORAGE_PATH . '/recepit 6-20-2021.pdf');
    // }

    // public function upload()
    // {
    //     echo '<pre>';
    //     var_dump($_FILES);

    //     var_dump(pathinfo($_FILES['receipt']['tmp_name']));
    //     echo '</pre>';

    //     $filePath = STORAGE_PATH . '/' . $_FILES['receipt']['name'];

    //     move_uploaded_file(
    //         $_FILES['receipt']['tmp_name'],
    //         STORAGE_PATH . '/' . $_FILES['receipt']['name'],
    //         $filePath
    //     );
    //     header('Location: /');
    //     exit;
    // }
    }
