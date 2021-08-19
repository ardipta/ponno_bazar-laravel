<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersPurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_purchases', function (Blueprint $table) {
            $table->id();
            $table->string('journey_id');
            $table->string('user_name');
            $table->string('user_mobile');
            $table->string('user_email')->nullable();
            $table->bigInteger('cashback_amount')->nullable();
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
        Schema::dropIfExists('users_purchases');
    }
}
