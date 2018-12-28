<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Reserve;
use App\Package;
use Carbon\Carbon;

class ReservePackageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $package_id = Package::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_package')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'package_id' => $package_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
