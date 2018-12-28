<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Package;
use App\Vehicle;
use Carbon\Carbon;

class PackageVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package_id = Package::inRandomOrder()->select('id')->get();
        $vehicle_id = Vehicle::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($package_id); $i++){
        	DB::table('package_vehicle')->insert([
        		'package_id' => $package_id[$i]->id,
        		'vehicle_id' => $vehicle_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
