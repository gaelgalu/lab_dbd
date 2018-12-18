<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RoomSchedule extends Model
{
    protected $fillable = ['startDate', 'endDate'];

    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
