<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewBookingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('new_bookings', function (Blueprint $table) {
            $table->id();
            $table->string('RoomName');
            $table->string('RoomSize');
            $table->string('Username');
            $table->string('Price');
            $table->string('Vendorname');
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
        Schema::dropIfExists('new_bookings');
    }
}
