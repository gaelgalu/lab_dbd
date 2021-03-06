<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehicleSuppliersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_suppliers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 50);
            $table->string('phoneNumber');

            //Foreign key from adresses

            $table->unsignedInteger('adress_id');
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');

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
        Schema::dropIfExists('vehicle_suppliers');
    }
}
