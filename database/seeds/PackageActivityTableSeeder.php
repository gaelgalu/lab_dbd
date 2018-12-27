<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Package;
use App\Activity;
use Carbon\Carbon;

class PackageActivityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package_id = Package::inRandomOrder()->select('id')->get();
        $activity_id = Activity::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($package_id); $i++){
        	DB::table('package_activity')->insert([
        		'package_id' => $package_id[$i]->id,
        		'activity_id' => $activity_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
