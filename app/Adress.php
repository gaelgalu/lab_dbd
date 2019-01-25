<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Adress extends Model
{
    protected $fillable = ['country', 'city', 'street', 'number'];

    public function activityProvider()
    {
        return $this->hasOne(ActivityProvider::class);
    }

    public function vehicleSupplier()
    {
        return $this->hasOne(VehicleSupplier::class);
    }

    public function lodging()
    {
        return $this->hasOne(Lodging::class);
    }

    public function airport()
    {
        return $this->hasOne(Airport::class);
    }

    public function transferProvider()
    {
        return $this->hasOne(TransferProvider::class);
    }

    public function transferSchedule()
    {
        return $this->belongsToMany(TransferSchedule::class);
    }

    public function transfers(){
        return $this->belongsToMany(Transfer::class);
    }
}
