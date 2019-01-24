<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\NewFlight;

class Flight extends Model
{
    protected $fillable = ['multiplier', 'startDate', 'endDate', 'availability', 'seatAmount', 'code'];

    public static function boot()
    {
        parent::boot();
        static::created(function($flight){
            event(new NewFlight($flight));
        });
    }

    public function airports()
    {
        return $this->belongsToMany(Airport::class);
    }

    public function insurance()
    {
        return $this->hasOne(Insurance::class);
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
