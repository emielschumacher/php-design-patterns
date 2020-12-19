<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

class MobileDevicePaymentStrategy implements PaymentStrategyInterface
{
    public function pay(): string
    {
        return 'Paying via mobile device';
    }
}