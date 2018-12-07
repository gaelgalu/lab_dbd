<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveVehicleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_vehicle', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //Foreigns keys from reserve and vehicle

            $table->integer('vehicle_id');
            $table->integer('reserve_id');

            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->foreign('reserve_id')->references('id')->on('reserves')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_vehicle');
    }
}
