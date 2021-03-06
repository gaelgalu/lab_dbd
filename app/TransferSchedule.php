<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferSchedule extends Model
{
    protected $fillable = ['startDate', 'endDate', 'transfer_id'];

    public function adress()
    {
        return $this->belongsToMany(Adress::class);
    }

    public function transfer()
    {
        return $this->belongsTo(Transfer::class);
    }
}
