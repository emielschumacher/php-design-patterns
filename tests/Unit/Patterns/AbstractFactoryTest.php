<?php

declare(strict_types=1);

namespace Unit\Patterns;

use App\Patterns\AbstractFactory\SmartphoneInterface;
use App\Patterns\AbstractFactory\AppleSmartphoneFactory;
use App\Patterns\AbstractFactory\MicrosoftSmartphoneFactory;
use App\Patterns\AbstractFactory\SmartphoneFactoryInterface;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Patterns\AbstractFactory\AppleSmartphoneFactory
 * @covers \App\Patterns\AbstractFactory\Iphone
 * @covers \App\Patterns\AbstractFactory\UnixCsvWriter
 * @covers \App\Patterns\AbstractFactory\WinCsvWriter
 * @covers \App\Patterns\AbstractFactory\WindowsPhone
 * @covers \App\Patterns\AbstractFactory\MicrosoftSmartphoneFactory
 * @covers \App\Patterns\AbstractFactory\WindowsPhone
 * @uses \App\Patterns\AbstractFactory\CsvWriter
 * @uses \App\Patterns\AbstractFactory\SmartphoneInterface
 * @uses \App\Patterns\AbstractFactory\SmartphoneFactoryInterface
 */
class AbstractFactoryTest extends TestCase
{
    /**
     * @dataProvider provideFactory
     * @param SmartphoneFactoryInterface $smartphoneFactory
     */
    public function testCanCreateSmartphone(SmartphoneFactoryInterface $smartphoneFactory): void
    {
        self::assertInstanceOf(SmartphoneInterface::class, $smartphoneFactory->createSmartphone());
    }

    public function provideFactory(): array
    {
        return [
            [new AppleSmartphoneFactory()],
            [new MicrosoftSmartphoneFactory()]
        ];
    }
}