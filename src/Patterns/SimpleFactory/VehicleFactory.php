<?php

declare(strict_types=1);

namespace App\Patterns\SimpleFactory;

use Exception;

class VehicleFactory
{
    /**
     * @param string $type
     * @return VehicleInterface
     * @throws Exception
     */
    public function create(
        string $type
    ): VehicleInterface {
        switch ($type) {
            case 'motor':
                return new Motor();
            case 'car':
                return new Car();
            default:
                throw new Exception('Vehicle type not found.');
        }
    }
}