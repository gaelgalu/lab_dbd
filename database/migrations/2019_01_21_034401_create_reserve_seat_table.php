<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveSeatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_seat', function (Blueprint $table) {
            $table->increments('id');

            //Foreign keys from reserve and seat

            $table->unsignedInteger('reserve_id');
            $table->unsignedInteger('seat_id');

            $table->foreign('reserve_id')->references('id')->on('reserves')->onDelete('cascade');
            $table->foreign('seat_id')->references('id')->on('seats')->onDelete('cascade');

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
        Schema::dropIfExists('reserve_seat');
    }
}
