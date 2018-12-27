<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAirplaneStretchTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('airplane_stretch', function (Blueprint $table) {
            $table->increments('id');

            //Foreigns keys from airplane and stretches

            $table->unsignedInteger('airplane_id');
            $table->unsignedInteger('stretch_id');

            $table->foreign('airplane_id')->references('id')->on('airplanes')->onDelete('cascade');
            $table->foreign('stretch_id')->references('id')->on('stretches')->onDelete('cascade');

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
        Schema::dropIfExists('airplane_stretch');
    }
}
