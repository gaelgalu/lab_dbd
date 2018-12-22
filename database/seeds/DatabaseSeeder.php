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
        $this->call(AdressTableSeeder::class);
        $this->call(VehicleSupplierTableSeeder::class);
        $this->call(VehicleTableSeeder::class);
        $this->call(ActivityProviderTableSeeder::class);
        $this->call(ActivityTableSeeder::class);
        $this->call(FlightTableSeeder::class);
        $this->call(InsuranceTableSeeder::class);
        $this->call(StretchTableSeeder::class);
        $this->call(AirplaneTableSeeder::class);
        $this->call(AirportTableSeeder::class);
        $this->call(LodgingTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(RoomScheduleTableSeeder::class);
        $this->call(SeatTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(ReserveTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(TransferProviderTableSeeder::class);
        $this->call(TransferTableSeeder::class);
        $this->call(TransferScheduleTableSeeder::class);
        $this->call(VehicleScheduleTableSeeder::class);
    }
}
