<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservePackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserve_package', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //Foreign keys from reserve and package

            $table->unsignedInteger('reserve_id');
            $table->unsignedInteger('package_id');

            $table->foreign('reserve_id')->references('id')->on('reserves')->onDelete('cascade');
            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reserve_package');
    }
}
