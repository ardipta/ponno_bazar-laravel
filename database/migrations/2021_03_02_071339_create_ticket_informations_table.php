<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTicketInformationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ticket_informations', function (Blueprint $table) {
            $table->id();
            $table->string('passenger_name');
            $table->string('passenger_phone');
            $table->string('passenger_gender');
            $table->string('passenger_email');
            $table->string('from');
            $table->string('to');
            $table->string('bus_service_name');
            $table->string('departure_time');
            $table->date('date_range_from');
            $table->string('booked_seat');
            $table->string('total_fare');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ticket_informations');
    }
}
