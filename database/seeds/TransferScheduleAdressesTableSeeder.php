<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;
use App\Adress;
use App\TransferSchedule;
use Carbon\Carbon;

class TransferScheduleAdressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transfer_schedule_id = TransferSchedule::inRandomOrder()->select('id')->get();
        $adress_id = Adress::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($transfer_schedule_id); $i++){
        	DB::table('transfer_schedule_adresses')->insert([
        		'type' => $value = (bool)random_int(0, 1),
        		'transfer_schedule_id' => $transfer_schedule_id[$i]->id,
        		'adress_id' => $adress_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
