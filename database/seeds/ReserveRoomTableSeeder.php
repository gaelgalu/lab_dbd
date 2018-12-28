<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Reserve;
use App\Room;
use Carbon\Carbon;

class ReserveRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $room_id = Room::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_room')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'room_id' => $room_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
