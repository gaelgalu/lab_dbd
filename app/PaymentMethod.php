<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = ['bankAccountNumber', 'typeOfAccount', 'bank', 'user_id'];

    public function reserve()
    {
        return $this->hasMany(Reserve::class);
    }

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
