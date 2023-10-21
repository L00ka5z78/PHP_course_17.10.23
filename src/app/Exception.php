<?php

declare(strict_types=1);

namespace App\Exception;

use Exception;

class MissingBillingException extends Exception
{
    protected $message = 'Missing billing information';
}
