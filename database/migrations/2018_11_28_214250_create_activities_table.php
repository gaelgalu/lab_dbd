<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->increments('id');

            $table->decimal('adultPrice', 20, 2);//
            $table->decimal('kidPrice', 20, 2);//
            $table->string('startDate');//
            $table->string('endDate');//
            $table->string('name', 30);//
            $table->text('description');//
            $table->integer('adultsCapacity');//
            $table->integer('kidsCapacity');//
            $table->boolean('availability');//

            //Foreign key from activity_providers table

            $table->unsignedInteger('activity_provider_id');
            $table->foreign('activity_provider_id')->references('id')->on('activity_providers')->onDelete('cascade');

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
        Schema::dropIfExists('activities');
    }
}
