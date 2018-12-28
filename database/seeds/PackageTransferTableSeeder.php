<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Package;
use App\Transfer;
use Carbon\Carbon;

class PackageTransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $package_id = Package::inRandomOrder()->select('id')->get();
        $trnasfer_id = Transfer::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($package_id); $i++){
        	DB::table('package_transfer')->insert([
        		'package_id' => $package_id[$i]->id,
        		'transfer_id' => $trnasfer_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
