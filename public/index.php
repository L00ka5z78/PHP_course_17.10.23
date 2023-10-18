 <?php

    // declare(strict_types=1);

    $root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

    define('APP_PATH', $root . 'app' . DIRECTORY_SEPARATOR);
    define('FILES_PATH', $root . 'transaction_files' . DIRECTORY_SEPARATOR);
    define('VIEWS_PATH', $root . 'views' . DIRECTORY_SEPARATOR);

    require APP_PATH . "App.php";

    // getting correct file transaction path

    $files = getTransactionFiles(FILES_PATH);

    /**get transaction. create empty arr and loop over file path and get transaction from path and merging into transactions variable  */

    $transactions = [];

    foreach ($files as $file) {
        $transactions = array_merge($transactions, getTransactions($file));
    }

    print_r($files);
    var_dump($files);
