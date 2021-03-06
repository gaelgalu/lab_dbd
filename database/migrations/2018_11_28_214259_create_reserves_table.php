<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserves', function (Blueprint $table) {
            $table->increments('id');
            $table->string('date')->nullable();
            $table->string('startDate')->nullable();
            $table->string('endDate')->nullable();
            $table->string('roomStartDate')->nullable();
            $table->string('roomEnddate')->nullable();
            $table->string('vehicleStartdDate')->nullable();
            $table->string('vehicleEndDate')->nullable();
            $table->string('activityStartDate')->nullable();
            $table->string('activityEndDate')->nullable();
            $table->string('transferStartDate')->nullable();
            $table->string('transferEndDate')->nullable();
            // $table->string('product', 50);
            $table->boolean('completed');
            $table->integer('amount');
            $table->decimal('price',20,2);

            //Foreign key from user

            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            //Foreign key from PaymentMethod

            $table->unsignedInteger('payment_method_id');
            $table->foreign('payment_method_id')->references('id')->on('payment_methods')->onDelete('cascade');

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
        Schema::dropIfExists('reserves');
    }
}
