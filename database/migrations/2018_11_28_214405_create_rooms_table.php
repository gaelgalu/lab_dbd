<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('price', 20, 2);
            $table->integer('doorNumber');
            $table->integer('kidsCapacity');
            $table->integer('adultsCapacity');
            $table->integer('type');
            $table->text('description');
            $table->boolean('availability');

            //Foreign key from lodgins

            $table->unsignedInteger('lodgings_id');
            $table->foreign('lodgings_id')->references('id')->on('lodgings')->onDelete('cascade');

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
        Schema::dropIfExists('rooms');
    }
}
