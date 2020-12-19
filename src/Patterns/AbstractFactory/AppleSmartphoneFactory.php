<?php

declare(strict_types=1);

namespace App\Patterns\AbstractFactory;

class AppleSmartphoneFactory implements SmartphoneFactoryInterface
{
    public function createSmartphone(): SmartphoneInterface
    {
        return new Iphone();
    }
}