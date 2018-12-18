<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Airport extends Model
{
    protected $fillable = ['name', 'telephone', 'mail'];

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }
}
