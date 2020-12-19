<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

class CashPaymentStrategy implements PaymentStrategyInterface
{
    public function pay(): string
    {
        return 'Paying in cash';
    }
}