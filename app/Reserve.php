<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = ['date', /*'product'*/ 'completed', 'amount', 'price', 'user_id', 'payment_method_id'];

    public function activities()
    {
        return $this->belongsToMany(Activity::class);
    }

    public function seats()
    {
        return $this->belongsToMany(Seat::class)->withTimestamps();
    }

    public function vehicles()
    {
        return $this->belongsToMany(Vehicle::class)->withTimestamps();
    }

    public function rooms()
    {
        return $this->belongsToMany(Room::class)->withTimestamps();
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class)->withTimestamps();
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class)->withTimestamps();
    }

    public function paymentMethod()
    {
        return $this->belongsTo(PaymentMethod::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
