<?php

use Illuminate\Database\Seeder;

class SeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Seat', 5)->create();
    }
}
