<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Student;
use Faker\Generator as Faker;

$factory->define(Student::class, function (Faker $faker) {
    return [
        'student_name' => 'Vrok',
        'student_no' => 'P17008245',
        'student_password' => '12345', // password
        'student_admin' => 0
    ];
});
