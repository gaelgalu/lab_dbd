<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stretch extends Model
{
    protected $fillable = ['origin', 'destiny', 'airline', 'airplane', 'platform', 'riseTime'];

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
}
