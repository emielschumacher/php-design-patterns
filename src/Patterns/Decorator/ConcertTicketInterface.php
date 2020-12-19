<?php

declare(strict_types=1);

namespace App\Patterns\Decorator;

interface ConcertTicketInterface
{
    public function getPrice(): float;

    public function getDescription(): string;
}