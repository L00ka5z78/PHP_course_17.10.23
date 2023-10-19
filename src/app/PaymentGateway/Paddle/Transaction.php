<?php

namespace app\PaymentGateway\Paddle;

use App\Enums\Status;

// use PaymentGateway\Stripe\Transaction as PaddleTransaction;

class Transaction
{
    private string $status;

    public function __construct()
    {
        $this->setStatus(Status::PENDING);
        // var_dump(self::STATUS_PAID);
    }
    public function setStatus(string $status): self
    {
        if (!isset(Status::ALL_STATUSES[$status])) {
            throw new \InvalidArgumentException('Invalid status');
        }

        $this->status = $status;

        return $this;
    }
}
