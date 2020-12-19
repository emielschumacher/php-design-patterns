<?php

declare(strict_types=1);

namespace App\Patterns\Decorator;

class EarlyBirdDecorator extends ConcertTicketDecorator
{
    public function getPrice(): float
    {
        return $this->concertTicket->getPrice() - 20.00;
    }

    public function getDescription(): string
    {
        return $this->concertTicket->getDescription() . ' with early bird';
    }
}