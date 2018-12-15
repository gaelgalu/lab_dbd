<?php

use Illuminate\Database\Seeder;

class AdressTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory('App\Adress', 5)->create();
    }
}
