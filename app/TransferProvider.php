<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TransferProvider extends Model
{
    protected $fillable = ['name', 'telephone', 'mail', 'adress_id'];

    public function adress()
    {
        return $this->belongsTo(Adress::class);
    }

    public function transfers()
    {
        return $this->hasMany(Transfer::class);
    }

}
