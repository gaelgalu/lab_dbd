<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('country', 30);
            $table->string('city', 20);
            $table->string('street', 25);
            $table->integer('number');
            $table->timestamps();

            //Foreign key from transfer providers table

            $table->unsignedInteger('transferProviders_id');
            $table->foreign('transferProviders_id')->references('id')->on('transfer_providers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
