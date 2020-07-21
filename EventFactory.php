<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Event;
use Faker\Generator as Faker;

$factory->define(Event::class, function (Faker $faker) {
    return [
        'event_name' => 'Test',
        'event_desc' => 'Example',
        'event_type' => 'Workshop',
        'event_location' => 'Lecture Hall',
        'event_date' => '2020-07-19',
        'event_startTime' => '14:00:00',
        'event_endTime' => '17:00:00',
        'event_participantNo' => 50,
        'event_fee' => 3.50,
        'event_organizer' => 0,
        'event_status' => 0
    ];
});
