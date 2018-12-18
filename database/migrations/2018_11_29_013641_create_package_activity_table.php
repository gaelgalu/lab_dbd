<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePackageActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('package_activity', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();

            //Foreign keys from package and activity

            $table->unsignedInteger('package_id');
            $table->unsignedInteger('activity_id');

            $table->foreign('package_id')->references('id')->on('packages')->onDelete('cascade');
            $table->foreign('activity_id')->references('id')->on('activities')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package_activity');
    }
}
