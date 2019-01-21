<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 20, 2);
            $table->string('arrivalDate'); 
            $table->string('arrivalTime');
            $table->string('departureDate');
            $table->string('departureTime');
            $table->unsignedInteger('origin');
            $table->unsignedInteger('destiny');
            $table->string('plane');

            $table->boolean('availability');

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
        Schema::dropIfExists('flights');
    }
}
