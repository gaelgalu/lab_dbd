<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleSupplier extends Model
{
    protected $fillable = ['name', 'email', 'phoneNumber'];

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function vehicles()
    {
        return $this->hasMany(Vehicle::class);
    }
}
