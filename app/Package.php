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
        return $this->belongsToMany(Vehicle::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class);
    }
}
