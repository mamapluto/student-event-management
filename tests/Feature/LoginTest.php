<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample() {
        $response = $this->get('/login');

        $response->assertStatus(200);
    }

    /** @test */
    public function login_route_return() {
        $response = $this->get('/login');

        //dd($response);

        $response->assertSee('');
    }
}
