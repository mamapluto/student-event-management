<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\Chrome;
use Tests\DuskTestCase;
Use App\Admin;

class AdminTest extends DuskTestCase{
    use DatabaseTransactions;

    private $admin;

    public function setUp():void {
        parent::setUp();

        $this->admin = factory(Admin::class)->make();
    }

    public function testAdminLogin() {
        $this->browse(function ($browser) {
            $browser->visit('/adminlogin')
                    ->assertSee('Admin Login')
                    ->type('username', $this->admin->admin_name)
                    ->type('password', $this->admin->admin_password)
                    ->press('Login')
                    ->assertPathIs('/admin');
        });
    }
}