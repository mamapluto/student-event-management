<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
use App\Student;
use App\Event;
Use App\Admin;

class LoginTest extends DuskTestCase {
    use DatabaseTransactions;

    private $student;
    private $event;
    private $admin;

    public function setUp():void {
        parent::setUp();

        $this->student = factory(Student::class)->make();
        $this->event = factory(Event::class)->make();
        $this->admin = factory(Admin::class)->make();
    }
    
    public function testLogin() {
        $this->browse(function ($browser) {
            $browser->visit('/login')
                    ->assertSee('Login')
                    ->type('id', $this->student->student_no)
                    ->type('password', $this->student->student_password)
                    ->press('Login')
                    ->assertPathIs('/');
        });
    }

    public function testRegister() {
        $this->browse(function ($browser) {
            $browser->visit('/register')
                    ->assertSee('Register')
                    ->type('name', $this->student->student_name)
                    ->type('id', $this->student->student_no)
                    ->type('password', $this->student->student_password)
                    ->type('conpassword', $this->student->student_password)
                    ->press('Register')
                    ->assertPathIs('/login');
        });
    }
}
