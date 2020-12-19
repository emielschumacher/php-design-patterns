<?php

declare(strict_types=1);

namespace Unit\Patterns;

use App\Patterns\SimpleFactory\Motor;
use App\Patterns\SimpleFactory\Car;
use App\Patterns\SimpleFactory\VehicleFactory;
use Exception;
use PHPUnit\Framework\TestCase;

/**
 * @covers \App\Patterns\SimpleFactory\VehicleFactory
 * @covers \App\Patterns\SimpleFactory\Car
 * @covers \App\Patterns\SimpleFactory\Motor
 * @uses \App\Patterns\SimpleFactory\VehicleInterface
 */
class SimpleFactoryTest extends TestCase
{
    /**
     * @throws Exception
     */
    public function testCanCreateAndDriveCar(): void
    {
        $factory = new VehicleFactory();

        $car = $factory->create('car');
        self::assertInstanceOf(Car::class, $car);
        self::assertEquals('Car is driving', $car->drive());
    }

    /**
     * @throws Exception
     */
    public function testCanCreateAndDriveMotor(): void
    {
        $factory = new VehicleFactory();

        $motor = $factory->create('motor');
        self::assertInstanceOf(Motor::class, $motor);
        self::assertEquals('Motor is driving', $motor->drive());
    }

    /**
     * @throws Exception
     */
    public function testVehicleNotFoundException(): void
    {
        $factory = new VehicleFactory();

        $this->expectException(Exception::class);
        $this->expectExceptionMessage('Vehicle type not found.');
        $factory->create('');
    }
}