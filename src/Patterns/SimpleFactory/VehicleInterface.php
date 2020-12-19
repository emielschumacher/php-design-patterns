<?php

declare(strict_types=1);

namespace App\Patterns\SimpleFactory;

interface VehicleInterface
{
    public function drive(): string;
}