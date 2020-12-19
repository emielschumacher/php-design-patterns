<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

class CardPaymentStrategy implements PaymentStrategyInterface
{
    public function pay(): string
    {
        return 'Paying via card';
    }
}