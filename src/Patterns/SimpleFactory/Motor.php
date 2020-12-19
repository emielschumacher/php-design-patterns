<?php

declare(strict_types=1);

namespace App\Patterns\SimpleFactory;

class Motor implements VehicleInterface
{
    public function drive(): string
    {
        return 'Motor is driving';
    }
}