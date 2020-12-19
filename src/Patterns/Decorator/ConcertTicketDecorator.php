<?php

declare(strict_types=1);

namespace App\Patterns\Decorator;

abstract class ConcertTicketDecorator implements ConcertTicketInterface
{
    protected ConcertTicketInterface $concertTicket;

    public function __construct(ConcertTicketInterface $concertTicket)
    {
        $this->concertTicket = $concertTicket;
    }
}