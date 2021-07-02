<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBusServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bus_services', function (Blueprint $table) {
            $table->id();
            $table->string('from');
            $table->string('to');
            $table->string('route');
            $table->string('bus_service_name');
            $table->string('bus_type');
            $table->string('bus_number');
            $table->string('bus_model');
            $table->string('departure_time');
            $table->string('arrival_time');
            $table->date('date_range_from');
            $table->date('date_range_to');
            $table->string('total_seat');
            $table->string('fare');
            $table->string('description')->nullable();
            $table->string('bus_image')->nullable();
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
        Schema::dropIfExists('bus_services');
    }
}
