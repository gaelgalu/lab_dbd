<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleSchedule extends Model
{
    protected $fillable = ['startDate', 'endDate', 'vehicle_id'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
