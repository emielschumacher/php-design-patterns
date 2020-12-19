<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

interface PaymentStrategyInterface
{
    public function pay(): string;
}