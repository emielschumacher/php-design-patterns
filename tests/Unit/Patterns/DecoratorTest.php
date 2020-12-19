<?php

declare(strict_types=1);

namespace Unit\Patterns;

use PHPUnit\Framework\TestCase;
use App\Patterns\Decorator\ConcertTicket;
use App\Patterns\Decorator\EarlyBirdDecorator;
use App\Patterns\Decorator\MeetAndGreetDecorator;

/**
 * @covers \App\Patterns\Decorator\ConcertTicket
 * @covers \App\Patterns\Decorator\ConcertTicketDecorator
 * @covers \App\Patterns\Decorator\EarlyBirdDecorator
 * @covers \App\Patterns\Decorator\MeetAndGreetDecorator
 * @covers \App\Patterns\Decorator\EarlyBirdDecorator
 * @uses \App\Patterns\Decorator\ConcertTicketInterface
 */
class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForConcertTicket(): void
    {
        $concertTicket = new ConcertTicket();

        self::assertSame(90.00, $concertTicket->getPrice());
        self::assertSame('concert ticket', $concertTicket->getDescription());
    }

    public function testCanCalculatePriceForConcertTicketWithMeetAndGreet(): void
    {
        $concertTicket = new ConcertTicket();
        $decoratedConcertTicket = new MeetAndGreetDecorator($concertTicket);

        self::assertSame(105.00, $decoratedConcertTicket->getPrice());
        self::assertSame('concert ticket with meet and greet', $decoratedConcertTicket->getDescription());
    }

    public function testCanCalculatePriceForConcertTicketWithMeetAndGreetAndEarlyBird(): void
    {
        $concertTicket = new ConcertTicket();
        $decoratedConcertTicket = new MeetAndGreetDecorator($concertTicket);
        $decoratedConcertTicket = new EarlyBirdDecorator($decoratedConcertTicket);

        self::assertSame(85.00, $decoratedConcertTicket->getPrice());
        self::assertSame('concert ticket with meet and greet with early bird', $decoratedConcertTicket->getDescription());
    }
}