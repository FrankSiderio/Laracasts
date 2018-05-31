<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Notification;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class NotificationTest extends TestCase
{
    use DatabaseTransactions;

    /** @test */
    function it_prepares_a_notification()
    {
        $notification = \App\Notification::prepare('a message');

        $this->assertEquals('a message', $notification->message);
        $this->assertTrue($notification->mustBeLoggedIn);
        $this->assertFalse($notification->exists);
    }

    /** @test */
    function it_sets_the_url_for_the_notification()
    {
        $notification = \App\Notification::prepare('a message')->to('https://example.com');

        $this->assertEquals('https://example.com', $notification->link);
    }

    /** @test */
    function it_scopes_queries_to_those_created_within_the_given_number_of_days()
    {
        factory(Notification::class)->create();

        factory(Notification::class)->create([
            'created_at' => Carbon::now()->subWeek()
        ]);

        $results = Notification::latest()->get();

        $this->assertCount(1, $results);
    }
}
