<?php

declare(strict_types=1);

namespace App\Patterns\Strategy;

class Payment
{
    private PaymentStrategyInterface $strategy;

    public function __construct(string $method)
    {
        switch ($method) {
            case 'card':
                $this->strategy = new CardPaymentStrategy();
                break;
            case 'cash':
                $this->strategy = new CashPaymentStrategy();
                break;
            case 'mobile device':
                $this->strategy = new MobileDevicePaymentStrategy();
                break;
        }
    }

    public function pay(): string
    {
        return $this->strategy->pay();
    }
}