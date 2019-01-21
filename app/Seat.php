<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['seatNumber', 'availability', 'checkIn', 'type', 'flight_id'];

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class);
    }

    public function flight()
    {
    	return $this->belongsTo(Flight::class);
    }
}
