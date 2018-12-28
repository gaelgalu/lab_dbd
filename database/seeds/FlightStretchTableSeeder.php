<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Flight;
use App\Stretch;
use Carbon\Carbon;

class FlightStretchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight_id = Flight::inRandomOrder()->select('id')->get();
        $stretch_id = Stretch::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($flight_id); $i++){
        	DB::table('flight_stretch')->insert([
        		'flight_id' => $flight_id[$i]->id,
        		'stretch_id' => $stretch_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
