<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $fillable = 
    ['date',
     /*'product'*/ 
    'completed',
    'amount',
    'price',
    'user_id', 
    'payment_method_id',
    'roomStartDate',
    'roomEnddate',
    'vehicleStartdDate',
    'vehicleEndDate',
    'activityStartDate',
    'activityEndDate',
    'transferStartDate',
    'transferEndDate',
];

    public function activities()
    {
        return $this->belongsToMany(Activity::class, 'reserve_activity');
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
        return $this->belongsToMany(Package::class, 'reserve_package')->withTimestamps();
    }

    public function transfers()
    {
        return $this->belongsToMany(Transfer::class)->withTimestamps();
    }

    public function paymentMethod()
    {
        return $this->hasOne(PaymentMethod::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function scopeUserId($query, $user_id)
    {
        if($user_id){
            return $query->where('user_id','=',$user_id);
        }
    }
}
