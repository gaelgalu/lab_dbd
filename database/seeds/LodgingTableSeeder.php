<?php

use Illuminate\Database\Seeder;

class LodgingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\Lodging', 5)->create();
    }
}
