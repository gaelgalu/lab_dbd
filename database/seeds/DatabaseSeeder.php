<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(TransferProviderTableSeeder::class);
    	$this->call(AdressTableSeeder::class);
        $this->call(VehicleSupplierTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
    }
}
