<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transfer extends Model
{
    protected $fillable = ['price', 'capacity', 'description', 'brand', 'model', 'type', 'availability', 'transfer_provider_id'];

    public function reserves()
    {
        return $this->belongsToMany(Reserve::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class);
    }

    public function transferProviders()
    {
        return $this->belongsTo(TransferProvider::class);
    }

    public function transferSchedules()
    {
        return $this->hasMany(TransferSchedule::class);
    }
}
