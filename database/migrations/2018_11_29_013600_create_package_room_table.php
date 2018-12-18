<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_room', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //Foreign keys from package and room

            $table->unsignedInteger('package_id');
            $table->unsignedInteger('room_id');

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_room');
    }
}
