<?php

declare(strict_types=1);

namespace App\Patterns\Decorator;

class ConcertTicket implements ConcertTicketInterface
{
    public function getPrice(): float
    {
        return 90.00;
    }

    public function getDescription(): string
    {
        return 'concert ticket';
    }
}