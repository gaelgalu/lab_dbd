<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\NewFlight;

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

    public function stretches()
    {
        return $this->belongsToMany(Stretch::class);
    }

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
