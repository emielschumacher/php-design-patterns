<?php

declare(strict_types=1);

namespace App\Patterns\AbstractFactory;

class MicrosoftSmartphoneFactory implements SmartphoneFactoryInterface
{
    public function createSmartphone(): SmartphoneInterface
    {
        return new WindowsPhone();
    }
}