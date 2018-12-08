<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStretchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stretches', function (Blueprint $table) {
            $table->increments('id');
            $table->string('origin', 60);
            $table->string('destiny', 60);
            $table->string('airline', 15);
            $table->integer('airplane');
            $table->integer('platform');
            $table->timestamp('riseTime');
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
        Schema::dropIfExists('stretches');
    }
}
