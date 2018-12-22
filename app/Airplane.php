<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airplane extends Model
{
    protected $fillable = ['name', 'code'];

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function stretch()
    {
        return $this->belongsToMany(Stretch::class);
    }
}
