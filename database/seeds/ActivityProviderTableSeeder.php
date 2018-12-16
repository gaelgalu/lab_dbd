<?php

use Illuminate\Database\Seeder;

class ActivityProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\ActivityProvider', 5)->create();
    }
}
