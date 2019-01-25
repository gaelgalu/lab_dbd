<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransfersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfers', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price', 20 , 2);
            $table->integer('capacity');
            $table->string('name');
            $table->text('description');
            $table->string('brand', 30);
            $table->string('model', 30);
            $table->integer('type');
            $table->boolean('availability');
            $table->string('origin');
            $table->string('destiny');

            //Foreign keys
            $table->unsignedInteger('transfer_provider_id');
            $table->foreign('transfer_provider_id')->references('id')->on('transfer_providers')->onDelete('cascade');
            
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
        Schema::dropIfExists('transfers');
    }
}
