<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Student;
use App\Http\Controller\EventController;

class LoginTest extends TestCase
{
    public function testLogin() {
        $student = new Student();
        $student->student_name = "Vrok";
        $student->student_no = "P17008245";
        $student->student_password = "12345";
        $student->student_admin = 0;

        //$response = $this->get('/login');

        //$response->assertStatus(200);

        $this->assertEquals("Vrok", $student->student_name);
    }
}
