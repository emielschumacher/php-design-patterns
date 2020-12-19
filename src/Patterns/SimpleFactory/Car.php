<?php

declare(strict_types=1);

namespace App\Patterns\SimpleFactory;

class Car implements VehicleInterface
{
    public function drive(): string
    {
        return 'Car is driving';
    }
}