<?php

namespace App\Models\Data;

use Illuminate\Database\Eloquent\Model;

/**
* Collection
*/
class Collection extends Model
{
    protected $table = 'data_collections';

    public function specimens()
    {
        return $this->hasMany(Specimen::class);
    }

    public function geolocation()
    {
        return $this->belongsTo(Geolocation::class);
    }

    public function collector()
    {
        return $this->belongsTo(Collector::class);
    }

    public function botanist()
    {
        return $this->belongsTo(Botanist::class);
    }

    public function geomountain()
    {
        return $this->belongsTo(Geomountain::class);
    }
}
