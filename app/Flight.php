<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $fillable = ['price', 'startDate', 'endDate', 'availability'];

    public function airplanes()
    {
        return $this->hasMany(Airplane::class);
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
