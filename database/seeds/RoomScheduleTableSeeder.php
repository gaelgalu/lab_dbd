<?php

use Illuminate\Database\Seeder;

class RoomScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\RoomSchedule', 5)->create();
    }
}
