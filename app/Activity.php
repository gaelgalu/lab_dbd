<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $fillable = ['adultPrice', 'kidPrice', 'startDate', 'endDate', 'name', 'description', 'adultsCapacity', 'kidsCapacity', 'availability', "activity_provider_id"];


    public function activityProvider()
    {
        return $this->belongsTo(activityProvider::class);
    }

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class, 'reserve_activity');
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

}
