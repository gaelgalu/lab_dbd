<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['token'];

    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }
}
