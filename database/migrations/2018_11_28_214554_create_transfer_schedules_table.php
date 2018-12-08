<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_schedules', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamp('startDate');
            $table->timestamp('endDate');
            $table->timestamps();

            //Foreign keys
            $table->unsignedInteger('transfer_id');
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
        Schema::dropIfExists('transfer_schedules');
    }
}
