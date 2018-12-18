<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = ['doorNumber', 'price', 'kidsCapacity', 'adultsCapacity', 'type', 'description', 'availability'];

    public function lodging()
    {
        return $this->belongsTo(Lodging::class);
    }

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function roomSchedules()
    {
        return $this->hasMany(RoomSchedule::class);
    }
}
