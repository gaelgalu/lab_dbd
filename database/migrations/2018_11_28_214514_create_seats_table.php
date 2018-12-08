<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->increments('id');
            $table->string('code', 10);
            $table->boolean('availability');
            $table->boolean('checkIn');
            $table->integer('type');
            $table->timestamps();

            //Foreign key.
            $table->unsignedInteger('airplane_id');
            $table->foreign('airplane_id')->references('id')->on('airplanes')->onDelete('cascade');


            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seats');
    }
}
