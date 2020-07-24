<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Admin;
use Faker\Generator as Faker;

$factory->define(Admin::class, function (Faker $faker) {
    return [
        'id' => 1,
        'admin_name' => 'Vrok',
        'admin_password' => '12345'
    ];
});
