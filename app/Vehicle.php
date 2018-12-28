<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = ['name', 'price', 'date', 'availability', 'capacity', 'patent', 'brand', 'model', 'description', 'vehicle_supplier_id'];

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function vehicleSchedules()
    {
        return $this->hasMany(VehicleSchedule::class);
    }

    public function vehicleSupplier()
    {
        return $this->belongsTo(VehicleSupplier::class);
    }
}
