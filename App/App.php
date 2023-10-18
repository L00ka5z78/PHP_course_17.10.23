 <?php

    // declare(strict_types=1);

    function getTransactionFiles(string $dirPath): array
    // function getTransactionFiles(): array
    {
        $files = [];

        foreach (scandir($dirPath) as $file) {
            if (is_dir($file)) {
                continue;
            }
            // getting correct file path
            $files[] = $dirPath . $file;
        }
        return $files;
    }
    // get transactions

    function getTransactions(string $fileName): array
    {
        //check if file exist and trigger error if not
        if (!file_exists($fileName)) {
            trigger_error('File"' . $fileName . '" does not exist', E_USER_ERROR);
        }
        // if exist , open for reading === 'r'
        $file = fopen($fileName, 'r');

        fgetcsv($file);

        $transactions = [];

        while (($transaction = fgetcsv($file)) !== false) {
            $transactions[] = $transaction;
        }
        return $transactions;
    }
