<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferProvidersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_providers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('telephone');
            $table->string('mail', 50);

            //Foreign key from adress 
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
        Schema::dropIfExists('transfer_providers');
    }
}
