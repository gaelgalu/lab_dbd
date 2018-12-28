<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = ['date', 'product', 'amount', 'price', 'user_id'];

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function flights()
    {
        return $this->belongsToMany(Flight::class);
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class);
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class);
    }

    public function paymentMethod()
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
