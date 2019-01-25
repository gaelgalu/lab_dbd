<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Adress;
use App\Transfer;

class AdressTransferTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adress_id = Adress::inRandomOrder()->select('id')->get();
        $transfer_id = Transfer::inRandomOrder()->select('id', 'origin', 'destiny')->get();

        foreach ($transfer_id as $transfer) {
            DB::table('adress_transfer')->insert([
                'adress_id' => $transfer->origin,
                'transfer_id' => $transfer->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::table('adress_transfer')->insert([
                'adress_id' => $transfer->destiny,
                'transfer_id' => $transfer->id,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
        }
    }
}
