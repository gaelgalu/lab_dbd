<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Airport;
use App\Flight;
use Carbon\Carbon;

class AirportFlightTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airport_id = Airport::inRandomOrder()->select('id')->get();
        $flight_id = Flight::inRandomOrder()->select('id', 'origin', 'destiny')->get();

        // for ($i=0; $i < count($airport_id); $i++){
        	// DB::table('airport_flight')->insert([
        	// 	'airport_id' => $airport_id[$i]->id,
        	// 	'flight_id' => $flight_id[$i]->id,
        	// 	'created_at' => Carbon::now(),
        	// 	'updated_at' => Carbon::now()
        	// ]);
        // }

        foreach ($flight_id as $flight) {
            DB::table('airport_flight')->insert([
                'airport_id' => $flight->origin,
                'flight_id' => $flight->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::table('airport_flight')->insert([
                'airport_id' => $flight->destiny,
                'flight_id' => $flight->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
