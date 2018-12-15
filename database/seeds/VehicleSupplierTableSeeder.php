<?php

use Illuminate\Database\Seeder;

class VehicleSupplierTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\VehicleSupplier', 5)->create();
    }
}
