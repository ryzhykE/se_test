<?php

namespace Tests\Unit;

use App\Bid;
use App\Event;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class EventTest extends TestCase
{
    use RefreshDatabase;

    public function testEventHasManyBids()
    {
        $event = factory(Event::class)->create();
        $event->bids()->save(factory(Bid::class)->create());

        $this->assertInstanceOf(Bid::class, $event->bids->first());
    }
}
