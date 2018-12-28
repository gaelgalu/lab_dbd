<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Reserve;
use App\Transfer;
use Carbon\Carbon;

class ReserveTransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reserve_id = Reserve::inRandomOrder()->select('id')->get();
        $transfer_id = Transfer::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($reserve_id); $i++){
        	DB::table('reserve_transfer')->insert([
        		'reserve_id' => $reserve_id[$i]->id,
        		'transfer_id' => $transfer_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
