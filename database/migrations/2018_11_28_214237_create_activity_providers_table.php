<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivityProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activity_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email', 50);
            $table->integer('phone');

            // Foreign key from adresses

            $table->unsignedInteger('adresses_id');
            $table->foreign('adresses_id')->references('id')->on('adresses')->onDelete('cascade');

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
        Schema::dropIfExists('activity_providers');
    }
}
