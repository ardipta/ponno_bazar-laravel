<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchaseTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchase_tickets', function (Blueprint $table) {
            $table->id();
            $table->string('journey_id');
            $table->string('from');
            $table->string('to');
            $table->date('purchase_date');
            $table->date('journey_date');
            $table->string('bus_id');
            $table->string('departure_time');
            $table->integer('number_of_seat');
            $table->bigInteger('fare');
            $table->bigInteger('discounted_fare')->nullable();
            $table->bigInteger('discount_amount')->nullable();
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
        Schema::dropIfExists('purchase_tickets');
    }
}
