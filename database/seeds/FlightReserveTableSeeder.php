<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Flight;
use App\Reserve;
use Carbon\Carbon;

class FlightReserveTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $flight_id = Flight::inRandomOrder()->select('id')->get();
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('flight_reserve')->insert([
        		'flight_id' => $flight_id[$i]->id,
        		'reserve_id' => $reserve_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
