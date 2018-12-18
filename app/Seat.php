<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['code', 'availability', 'checkIn', 'type'];

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }
}
