<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Reserve;
use App\Activity;
use Carbon\Carbon;

class ReserveActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $activity_id = Activity::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_activity')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'activity_id' => $activity_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
