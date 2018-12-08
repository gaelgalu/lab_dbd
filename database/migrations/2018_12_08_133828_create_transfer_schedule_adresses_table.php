<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransferScheduleAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transfer_schedule_adresses', function (Blueprint $table) {
            $table->increments('id');
            $table->boolean('type'); // departure or return (true o false)
            $table->timestamps();

            //Foreign keys
            $table->unsignedInteger('adress_id');
            $table->foreign('adress_id')->references('id')->on('adresses')->onDelete('cascade');
            $table->unsignedInteger('transfer_schedule_id');
            $table->foreign('transfer_schedule_id')->references('id')->on('transfer_schedules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transfer_schedule_adresses');
    }
}
