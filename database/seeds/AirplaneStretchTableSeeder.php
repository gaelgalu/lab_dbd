<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Airplane;
use App\Stretch;
use Carbon\Carbon;


class AirplaneStretchTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $airplanes_id = Airplane::inRandomOrder()->select('id')->get();
        $stretches_id = Stretch::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($airplanes_id); $i++){
        	DB::table('airplane_stretch')->insert([
        		'airplane_id' => $airplanes_id[$i]->id,
        		'stretch_id' => $stretches_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
