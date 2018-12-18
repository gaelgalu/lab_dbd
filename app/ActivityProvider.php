<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ActivityProvider extends Model
{
    protected $fillable = ['name', 'email', 'phone'];

    public function activities()
    {
        return $this->hasMany(Activity::class);
    }

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }


}
