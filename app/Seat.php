<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seat extends Model
{
    protected $fillable = ['code', 'availability', 'checkIn', 'type', 'airplane_id'];

    public function airplane()
    {
        return $this->belongsTo(Airplane::class);
    }
}
