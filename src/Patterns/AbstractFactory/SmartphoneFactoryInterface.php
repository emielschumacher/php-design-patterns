<?php

declare(strict_types=1);

namespace App\Patterns\AbstractFactory;

interface SmartphoneFactoryInterface
{
    public function createSmartphone(): SmartphoneInterface;
}