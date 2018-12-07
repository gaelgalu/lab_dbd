<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_room', function (Blueprint $table) {
            $table->increments('id');

            //Foreign keys from reserve and room
            $table->unsignedInteger('reserves_id');
            $table->unsignedInteger('rooms_id');

            $table->foreign('reserves_id')->references('id')->on('reserves')->onDelete('cascade');
            $table->foreign('rooms_id')->references('id')->on('rooms')->onDelete('cascade');

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
        Schema::dropIfExists('reserve_room');
    }
}
