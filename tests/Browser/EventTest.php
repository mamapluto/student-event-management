<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use App\Student;
use App\Event;
Use App\Admin;

class EventTest extends DuskTestCase
{
    use DatabaseTransactions;

    private $event;
    private $admin;

    public function setUp():void {
        parent::setUp();

        $this->event = factory(Event::class)->make();
        $this->admin = factory(Admin::class)->make();
    }
    
    public function testCreateEvent() {
        $this->browse(function ($browser) {
            $browser->loginAs(Admin::find($this->admin->id))
                    ->visit('/admin_createevent')
                    ->assertSee('Create Event')
                    ->type('name', $this->event->event_name)
                    ->type('desc', $this->event->event_desc)
                    ->type('type', $this->event->event_type)
                    ->type('location', $this->event->event_location)
                    ->type('date', '19072020') //input is dmY
                    ->type('start_time', '0200PM')
                    ->type('end_time','0500PM')
                    ->type('participant_no', $this->event->event_participantNo)
                    ->type('fee', $this->event->event_fee)
                    ->press('Create Event')
                    ->assertPathIs('/admin');
        });
    }
}
