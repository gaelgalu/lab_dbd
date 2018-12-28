<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLodgingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lodgings', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('email', 50);
            $table->string('phoneNumber');
            $table->smallInteger('evaluation');
            $table->smallInteger('numberOfRooms');
            $table->text('description');

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
        Schema::dropIfExists('lodgings');
    }
}
