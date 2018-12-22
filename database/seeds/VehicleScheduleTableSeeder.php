<?php

use Illuminate\Database\Seeder;

class VehicleScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\VehicleSchedule', 5)->create();
    }
}
