<?php

use Illuminate\Database\Seeder;

class AirplaneTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Airplane', 5)->create();
    }
}
