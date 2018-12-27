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
        $transfer_schedules_id = TransferSchedule::inRandomOrder()->select('id')->get();
        $adresses_id = Adress::inRandomOrder()->select('id')->get();

        for ($i=0; $i < count($transfer_schedules_id); $i++){
        	DB::table('transfer_schedule_adresses')->insert([
        		'type' => $value = (bool)random_int(0, 1),
        		'transfer_schedule_id' => $transfer_schedules_id[$i]->id,
        		'adress_id' => $adresses_id[$i]->id,
        		'created_at' => Carbon::now(),
        		'updated_at' => Carbon::now()
        	]);
        }
    }
}
