<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['price', 'startDate', 'endDate', 'availability'];

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
