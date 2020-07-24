<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'user_name' => 'Vrok',
        'admin' => 1
    ];
});
