<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReserveTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_transfer', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //Foreign keys from reserve and transfer

            $table->unsignedInteger('reserve_id');
            $table->unsignedInteger('transfer_id');

            $table->foreign('reserve_id')->references('id')->on('reserves')->onDelete('cascade');
            $table->foreign('transfer_id')->references('id')->on('transfers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_transfer');
    }
}
