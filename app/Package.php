<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = ['name', 'price', 'discount', 'description'];

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class, 'reserve_package');
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class, 'package_vehicle');
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class, 'package_room');
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'package_activity');
    }

    public function flights()
    {
        return $this->belongsToMany(Flight::class, 'package_flight');
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class, 'package_transfer');
    }
}
