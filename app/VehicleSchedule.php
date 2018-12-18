<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VehicleSchedule extends Model
{
    protected $fillable = ['startDate', 'endDate'];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
