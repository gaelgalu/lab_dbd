<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lodging extends Model
{
    protected $fillable = ['name', 'email', 'phoneNumber', 'evaluation', 'numberOfRooms', 'description'];

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function rooms()
    {
        return $this->hasMany(Room::class);
    }
}
