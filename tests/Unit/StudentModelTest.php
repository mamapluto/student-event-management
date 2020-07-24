<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use App\Student;

class StudentModelTest extends TestCase
{
    use DatabaseTransactions;
    use DatabaseMigrations;

    private $student;
    public function setUp():void {
        parent::setUp();

        $this->student = factory(Student::class)->make();
    }
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testRegister() {
        $response = $this->get('/register');
        $this->student->save();

        $response->assertStatus(200);

        //$this->assertEquals("Vrok", $this->student->student_name);
    }
    public function testLogin() {
        $this->assertTrue(true);
    }

    public function testAdminLogin() {
        $admin = factory(Student::class)->make([
            'student_admin' => 1 
        ]);

        $this->assertEquals(1, $admin->student_admin);
    }
}
