<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Package;
use App\Flight;
use Carbon\Carbon;

class PackageFlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package_id = Package::inRandomOrder()->select('id')->get();
        $flights_id = Flight::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($package_id); $i++){
        	DB::table('package_flight')->insert([
        		'package_id' => $package_id[$i]->id,
        		'flight_id' => $flights_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
