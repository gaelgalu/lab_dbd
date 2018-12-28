<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Reserve;
use App\Vehicle;
use Carbon\Carbon;

class ReserveVehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $vehicle_id = Vehicle::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_vehicle')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'vehicle_id' => $vehicle_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
