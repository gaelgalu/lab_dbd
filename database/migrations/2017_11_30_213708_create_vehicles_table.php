<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 20, 2);
            $table->timestamp('date');
            $table->boolean('availability');
            $table->smallInteger('capacity');
            $table->string('patent', 10);
            $table->string('brand', 25);
            $table->string('model', 25);
            $table->text('description');

            //Foreing key from vehicle_suppliers

            $table->unsignedInteger('vehicle_suppliers_id');
            $table->foreign('vehicle_suppliers_id')->references('id')->on('vehicle_suppliers')->onDelete('cascade');


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
        Schema::dropIfExists('vehicles');
    }
}