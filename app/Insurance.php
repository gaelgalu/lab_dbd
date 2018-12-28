<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insurance extends Model
{
    protected $fillable = ['id', 'price', 'description', 'availability', 'flight_id'];

    public function flight()
    {
        return $this->belongsTo(Flight::class);
    }
}
