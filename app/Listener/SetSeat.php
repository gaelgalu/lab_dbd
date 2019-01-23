<?php

namespace App\Listener;

use App\Events\NewFlight;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Seat;

class SetSeat
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  NewFlight  $event
     * @return void
     */
    public function handle(NewFlight $event)
    {
        for ($i = 0; $i<100; $i++){
            $seat = new Seat();

            if ($i < 25){
                $seat->code = 'E' . $i;
                $seat->price = 25000;
                $seat->type = "Economy";
            } elseif ($i < 50) {
                $seat->code = 'PE' . $i;
                $seat->price = 150000;
                $seat->type = "Premium Economy"; 
            } else {
                $seat->code = 'PE' . $i;
                $seat->price = 350000;
                $seat->type = "Premium Business"; 
            }

            $seat->availability = true;
            $seat->checkIn = false;
            $seat->flight()->associate($event->flight);
            $seat->save();
        }
    }
}
