<?php

declare(strict_types=1);

namespace Unit\Patterns;

use App\Patterns\Strategy\Payment;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Patterns\Strategy\Payment
 * @covers \App\Patterns\Strategy\CardPaymentStrategy
 * @covers \App\Patterns\Strategy\CashPaymentStrategy
 * @covers \App\Patterns\Strategy\MobileDevicePaymentStrategy
 * @uses \App\Patterns\Strategy\PaymentStrategyInterface
 */
class StrategyTest extends TestCase
{
    public function testCanPayWithCardStrategy(): void
    {
        $paymentStrategy = new Payment('card');

        self::assertEquals('Paying via card', $paymentStrategy->pay());
    }

    public function testCanPayWithCashStrategy(): void
    {
        $paymentStrategy = new Payment('cash');

        self::assertEquals('Paying in cash', $paymentStrategy->pay());
    }

    public function testCanPayWithMobileDevicePaymentStrategy(): void
    {
        $paymentStrategy = new Payment('mobile device');

        self::assertEquals('Paying via mobile device', $paymentStrategy->pay());
    }
}