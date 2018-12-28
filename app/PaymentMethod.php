<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['rut', 'paymentMethod', 'reserve_id'];

    public function reserve()
    {
        return $this->belongsTo(Reserve::class);
    }
}
