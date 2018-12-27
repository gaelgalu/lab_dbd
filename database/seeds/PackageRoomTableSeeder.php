<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Package;
use App\Room;
use Carbon\Carbon;

class PackageRoomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package_id = Package::inRandomOrder()->select('id')->get();
        $activity_id = Room::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($package_id); $i++){
        	DB::table('package_room')->insert([
        		'package_id' => $package_id[$i]->id,
        		'room_id' => $activity_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
