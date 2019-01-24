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
        $this->call(AirportTableSeeder::class);
        $this->call(FlightTableSeeder::class);
        // $this->call(SeatTableSeeder::class);
        // $this->call(InsuranceTableSeeder::class);
        $this->call(LodgingTableSeeder::class);
        $this->call(PackageTableSeeder::class);
        $this->call(RoomTableSeeder::class);
        $this->call(RoomScheduleTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(PaymentMethodTableSeeder::class);
        $this->call(ReserveTableSeeder::class);
        $this->call(TransferProviderTableSeeder::class);
        $this->call(TransferTableSeeder::class);
        $this->call(TransferScheduleTableSeeder::class);
        $this->call(VehicleScheduleTableSeeder::class);
        $this->call(TransferScheduleAdressesTableSeeder::class);
        $this->call(PackageTransferTableSeeder::class);
        $this->call(PackageFlightTableSeeder::class);
        $this->call(PackageActivityTableSeeder::class);
        $this->call(PackageRoomTableSeeder::class);
        $this->call(PackageVehicleTableSeeder::class);
        $this->call(ReserveRoomTableSeeder::class);
        $this->call(ReservePackageTableSeeder::class);
        $this->call(ReserveActivityTableSeeder::class);
        $this->call(ReserveVehicleTableSeeder::class);
        $this->call(ReserveTransferTableSeeder::class);
        $this->call(FlightReserveTableSeeder::class);
        $this->call(AirportFlightTableSeeder::class);
        $this->call(ReserveSeatTableSeeder::class);
    }
}
