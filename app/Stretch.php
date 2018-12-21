<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stretch extends Model
{
    protected $fillable = ['origin', 'destiny', 'airline', 'platform', 'riseTime'];

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }

    public function airplanes()
    {
    	return $this->hasMany(Airplane::class);
    }
}
