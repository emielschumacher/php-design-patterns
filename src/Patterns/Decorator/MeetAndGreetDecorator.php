<?php

declare(strict_types=1);

namespace App\Patterns\Decorator;

class MeetAndGreetDecorator extends ConcertTicketDecorator
{
    public function getPrice(): float
    {
        return $this->concertTicket->getPrice() + 15.00;
    }

    public function getDescription(): string
    {
        return $this->concertTicket->getDescription() . ' with meet and greet';
    }
}