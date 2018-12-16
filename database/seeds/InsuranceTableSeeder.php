<?php

use Illuminate\Database\Seeder;

class InsuranceTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory('App\Insurance', 5)->create();
    }
}
