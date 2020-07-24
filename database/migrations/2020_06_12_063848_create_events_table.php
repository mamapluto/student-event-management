<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('event_name');
            $table->string('event_desc');
            $table->string('event_type');
            $table->string('event_location');
            $table->date('event_date');
            $table->time('event_startTime');
            $table->time('event_endTime');
            $table->integer('event_participantNo');
            $table->double('event_fee');
            $table->integer('event_organizer');
            $table->integer('event_status');
            //$table->string('event_contact');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
