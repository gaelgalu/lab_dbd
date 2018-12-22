<?php

use Illuminate\Database\Seeder;

class TransferScheduleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TransferSchedule', 5)->create();
    }
}
