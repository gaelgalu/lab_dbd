<?php

namespace App\Listener;

use App\Events\NewAirplane;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\Seat;

class SetSeats
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
     * @param  NewAirplane  $event
     * @return void
     */
    public function handle(NewAirplane $event)
    {
        for ($i=0; $i < 20; $i++) { 
            $seat = new Seat();
            $seat->seatNumber = $i;
            $seat->availability = true;
            $seat->checkIn = false;

            if ($i < 10) {
                $seat->type = 'Economy';
            } else if (10 <= $i && $i < 15){
                $seat->type = 'Premium Economy';
            } else {
                $seat->type = 'Premium Business';
            }

            $event->airplane->seats()->save($seat);
        }
    }
}
