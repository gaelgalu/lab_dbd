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
            $table->string('country', 50);
            $table->string('city', 50);
            $table->string('street', 25);
            $table->integer('number');

            //Foreign key from transfer providers table

            $table->unsignedInteger('transferProviders_id');
            $table->foreign('transferProviders_id')->references('id')->on('transfer_providers')->onDelete('cascade');
            
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
        Schema::dropIfExists('adresses');
    }
}
