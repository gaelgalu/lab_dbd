<?php

use Illuminate\Database\Seeder;

class TransferProviderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory('App\TransferProvider', 5)->create();
    }
}
