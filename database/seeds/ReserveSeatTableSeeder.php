<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use app\Seat;
use app\Reserve;
use Carbon\Carbon;

class ReserveSeatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $seat_id = Seat::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_seat')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'seat_id' => $seat_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
