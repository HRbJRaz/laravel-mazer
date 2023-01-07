<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seat_booking', function (Blueprint $table) {
            $table->id();
            $table->string('session_id');
            $table->integer('seat_id');
            $table->decimal('seat_price');
            $table->date('pickup_date');
            $table->date('dropoff_date');
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
        Schema::dropIfExists('seat_booking');
    }
};
