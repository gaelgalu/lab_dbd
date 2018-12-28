<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\NewAirplane;

class Airplane extends Model
{
    protected $fillable = ['name', 'code'];

    public static function boot()
    {
        parent::boot();
        static::created(function($airplane){
            event(new NewAirplane($airplane));
        });
    }

    public function seats()
    {
        return $this->hasMany(Seat::class);
    }

    public function stretch()
    {
        return $this->belongsToMany(Stretch::class);
    }
}
