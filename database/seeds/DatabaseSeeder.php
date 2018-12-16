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
        $this->call(ActivityProviderTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(InsuranceTableSeeder::class);
        $this->call(FlightTableSeeder::class);
        $this->call(AirplaneTableSeeder::class);
        $this->call(AirportTableSeeder::class);
        $this->call(LodgingTableSeeder::class);
        $this->call(PackageTableSeeder::class);

    }
}
